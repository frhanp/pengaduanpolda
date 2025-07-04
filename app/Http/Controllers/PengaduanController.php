<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Http\Requests\StorePengaduanRequest;
use Illuminate\Support\Facades\Storage;

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

    public function petaRawan()
    {
        // Logika ini sama persis dengan controller 'index' Anda yang sudah berfungsi.
        $laporanDiPeta = Pengaduan::select('latitude', 'longitude', 'isi_laporan', 'status')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->latest()
            ->get();

        // Kirim data ke view baru 'peta-rawan' dengan nama variabel 'laporan'.
        return view('peta-rawan', ['laporan' => $laporanDiPeta]);
    }

    public function store(Request $request)
    {
        // 1. Validasi semua input langsung di sini
        $validatedData = $request->validate([
            'nama_pelapor'      => 'required|string|max:255',
            'no_hp_pelapor'     => 'required|string|max:20',
            'umur_pelapor'      => 'nullable|integer|min:1',
            'pekerjaan_pelapor' => 'nullable|string|max:100',
            'alamat_pelapor'    => 'nullable|string',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
            'tujuan_polsek'     => 'required|string|max:255',
            'nik'               => 'required|numeric|digits:16',
            'foto_ktp'          => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        // 2. Proses upload file foto KTP (logika ini tidak berubah)
        if ($request->hasFile('foto_ktp')) {
            $path = $request->file('foto_ktp')->store('public/ktp');
            $validatedData['foto_ktp'] = Storage::url($path);
        }

        // 3. Simpan semua data ke database (logika ini tidak berubah)
        Pengaduan::create($validatedData);
        
        return redirect('/')->with('success', 'Laporan Anda telah berhasil dikirim. Terima kasih!');
    }

    public function lacak(Request $request)
    {
        $pengaduans = collect();

        if ($request->filled('nama_pelapor')) {
            $namaPelapor = $request->input('nama_pelapor');

            // [PERBAIKAN] Ganti 'ILIKE' menjadi 'LIKE'
            $pengaduans = Pengaduan::where('nama_pelapor', 'LIKE', '%' . $namaPelapor . '%')
                ->latest()
                ->get();
        }

        return view('lacak', compact('pengaduans'));
    }
}
