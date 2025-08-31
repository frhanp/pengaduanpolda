<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Http\Requests\StorePengaduanRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\PengaduanReceived;
use App\Mail\PengaduanDiperbaiki;

class PengaduanController extends Controller
{
    public function index()
    {
        // [BAGIAN KRUSIAL] - Ambil data dari database
        // Hanya ambil data yang punya koordinat untuk ditampilkan di peta
        $laporanDiPeta = Pengaduan::select('latitude', 'longitude', 'isi_laporan', 'status')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->latest() // Ambil yang terbaru
            ->get();

        // [BAGIAN KRUSIAL] - Kirim data ke view dengan nama variabel 'laporan'
        return view('welcome', ['laporan' => $laporanDiPeta]);
    }

    public function showVerificationForm(Pengaduan $pengaduan)
    {
        // Pastikan hanya laporan yang 'Dikembalikan' yang bisa diakses
        if ($pengaduan->status !== 'Dikembalikan') {
            abort(404); // Tampilkan halaman tidak ditemukan jika statusnya tidak sesuai
        }

        return view('lacak.verifikasi', compact('pengaduan'));
    }

    /**
     * [FUNGSI BARU]
     * Memproses NIK yang diinput dan mengarahkan ke form edit jika cocok.
     */
    public function handleVerification(Request $request, Pengaduan $pengaduan)
    {
        $request->validate(['nik' => 'required|numeric|digits:16']);

        // Bandingkan NIK yang diinput dengan NIK di database
        if ($request->nik === $pengaduan->nik) {
            // Jika cocok, beri "izin" di session untuk mengedit laporan ini
            $request->session()->put('can_edit_pengaduan_' . $pengaduan->id, true);

            // Arahkan ke halaman form perbaikan (akan kita buat di langkah 3)
            return redirect()->route('laporan.edit.form', $pengaduan->id);
        }

        // Jika tidak cocok, kembalikan dengan pesan error
        return back()->with('error', 'NIK yang Anda masukkan tidak sesuai.');
    }

    public function petaRawan()
    {
        // [PERUBAHAN] Menambahkan 'tujuan_polsek' ke dalam select query
        // agar data ini tersedia di view untuk ditampilkan saat hover.
        $laporanDiPeta = Pengaduan::select('latitude', 'longitude', 'isi_laporan', 'status', 'tujuan_polsek')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->latest()
            ->get();

        // Kirim data ke view 'peta-rawan' dengan nama variabel 'laporan'.
        return view('peta-rawan', ['laporan' => $laporanDiPeta]);
    }

    /**
     * [FUNGSI BARU]
     * Menampilkan form perbaikan yang sudah terisi data lama.
     */
    public function showEditForm(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Cek "izin" yang kita berikan di session setelah NIK cocok
        if (!$request->session()->get('can_edit_pengaduan_' . $pengaduan->id)) {
            // Jika tidak ada izin, akses ditolak
            abort(403, 'Akses tidak diizinkan. Silakan verifikasi NIK Anda terlebih dahulu.');
        }

        // Tampilkan view form edit dan kirim data pengaduan yang ada
        return view('lacak.edit', compact('pengaduan'));
    }

    /**
     * [FUNGSI BARU]
     * Memproses data laporan yang sudah diperbaiki.
     */
    public function handleUpdate(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Cek "izin" sekali lagi
        if (!$request->session()->get('can_edit_pengaduan_' . $pengaduan->id)) {
            abort(403, 'Akses tidak diizinkan.');
        }

        // Validasi data yang masuk. Perhatikan 'foto_ktp' sekarang 'nullable'.
        $validatedData = $request->validate([
            'nama_pelapor'      => 'required|string|max:255',
            'no_hp_pelapor'     => 'required|string|max:20',
            'nik'               => 'required|numeric|digits:16',
            'foto_ktp'          => 'nullable|image|mimes:jpeg,png,jpg|max:10000', // Foto KTP sekarang opsional
            'tempat_lahir'      => 'required|string|max:100',
            'tanggal_lahir'     => 'required|date',
            'jenis_kelamin'     => 'required|string|in:Laki-laki,Perempuan',
            'agama'             => 'required|string|max:50',
            'pekerjaan_pelapor' => 'nullable|string|max:100',
            'alamat_pelapor'    => 'nullable|string',
            'tujuan_polsek'     => 'required|string|max:255',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
        ]);

        // Cek jika ada file KTP baru yang di-upload
        if ($request->hasFile('foto_ktp')) {
            // Hapus file KTP lama jika ada
            if ($pengaduan->foto_ktp) {
                Storage::delete('public/' . $pengaduan->foto_ktp);
            }
            // Simpan file KTP yang baru
            $path = $request->file('foto_ktp')->store('ktp', 'public');
            $validatedData['foto_ktp'] = $path;
        }
        // ---- PERUBAIKAN LOGIKA ----
        // 1. Tambahkan status baru dan hapus catatan ke data yang akan diupdate
        $validatedData['status'] = 'Baru';
        $validatedData['catatan_pengembalian'] = null;

        // 2. Lakukan update HANYA SEKALI untuk semua perubahan
        $pengaduan->update($validatedData);

        // 3. Catat ke riwayat
        $pengaduan->riwayatStatus()->create([
            'status'  => 'Baru',
            'catatan' => 'Laporan diperbaiki dan dikirim ulang oleh pelapor.',
        ]);

        // 4. Kirim email notifikasi ke pelapor
        Mail::to($pengaduan->email_pelapor)->send(new PengaduanDiperbaiki($pengaduan));
        // ---- BATAS PERUBAIKAN ----

        // // Update data pengaduan di database
        // $pengaduan->update($validatedData);

        // // Kembalikan status menjadi 'Baru' dan hapus catatan
        // $pengaduan->update([
        //     'status' => 'Baru',
        //     'catatan_pengembalian' => null,
        // ]);

        // Hapus "izin" dari session setelah selesai
        $request->session()->forget('can_edit_pengaduan_' . $pengaduan->id);

        // Arahkan kembali ke halaman lacak dengan pesan sukses
        return redirect()->route('lacak.aduan', ['nama_pelapor' => $pengaduan->nama_pelapor])
            ->with('success', 'Laporan berhasil diperbaiki dan telah dikirim ulang untuk ditinjau.');
    }

    public function store(Request $request)
    {
        // 1. Validasi semua input langsung di sini
        $validatedData = $request->validate([
            'nama_pelapor'      => 'required|string|max:255',
            'email_pelapor'     => 'required|email|max:255',
            'bukti.*'           => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
            'no_hp_pelapor'     => 'required|string|max:20',
            'umur_pelapor'      => 'required|integer|min:1',
            'pekerjaan_pelapor' => 'required|string|max:100',
            'alamat_pelapor'    => 'required|string',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
            'tujuan_polsek'     => 'required|string|max:255',
            'nik'               => 'required|numeric',
            'foto_ktp'          => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'agama'             => 'required|string|max:50',
            'tempat_lahir'      => 'required|string|max:255',
            'tanggal_lahir'     => 'required|date',
            'jenis_kelamin'     => 'required|string|max:20',
        ]);


        // 2. Proses upload file foto KTP
        if ($request->hasFile('foto_ktp')) {


            $path = $request->file('foto_ktp')->store('ktp', 'public');

            // [PERBAIKAN] Cek apakah file berhasil disimpan
            if (!$path) {
                // Jika gagal, kembalikan dengan pesan error
                return redirect()->back()->with('error', 'Gagal mengupload file KTP. Pastikan folder storage dapat ditulis.');
            }

            // $path sekarang akan berisi 'ktp/namafileacak.jpg'
            // Ini adalah path yang benar untuk disimpan ke database.
            $validatedData['foto_ktp'] = $path;
        }

        // 3. Simpan semua data ke database
        $pengaduan = Pengaduan::create($validatedData);

        // 4. Proses upload file bukti (jika ada)
        if ($request->hasFile('bukti')) {
            foreach ($request->file('bukti') as $file) {
                $path = $file->store('bukti', 'public');
                // Gunakan relasi untuk menyimpan bukti
                $pengaduan->bukti()->create([
                    'file_path' => $path
                ]);
            }
        }
        Mail::to($pengaduan->email_pelapor)->send(new PengaduanReceived($pengaduan));
        return redirect('/')->with('success', 'Laporan Anda telah berhasil dikirim. Terima kasih!');
    }

    public function lacak(Request $request)
    {
        $pengaduans = collect();

        if ($request->filled('nama_pelapor')) {
            $namaPelapor = $request->input('nama_pelapor');


            // [PERBAIKAN] Ganti 'ILIKE' menjadi 'LIKE'
            $pengaduans = Pengaduan::with('riwayatStatus')
            ->where('nama_pelapor', 'LIKE', '%' . $namaPelapor . '%')
            ->latest()
            ->get();
        }

        return view('lacak', compact('pengaduans'));
    }


    public function showProfil()
    {
        return view('pages.profil');
    }



    /**
     * [FUNGSI BARU] Menampilkan halaman Fitur.
     */
    public function showFitur()
    {
        return view('pages.fitur');
    }

    /**
     * [FUNGSI BARU] Menampilkan halaman Kontak.
     */
    public function showKontak()
    {
        return view('pages.kontak');
    }
}
