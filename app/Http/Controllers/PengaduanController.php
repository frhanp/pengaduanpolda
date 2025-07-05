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

    public function store(StorePengaduanRequest $request)
    {
        // 1. Ambil semua data yang sudah divalidasi oleh StorePengaduanRequest
        $validatedData = $request->validated();

        // 2. Proses upload file foto KTP jika ada
        if ($request->hasFile('foto_ktp')) {
            // Simpan file ke storage/app/public/ktp
            // Nama file akan unik berdasarkan waktu upload
            $path = $request->file('foto_ktp')->store('public/ktp');

            // Simpan path file yang bisa diakses publik ke dalam data yang akan disimpan
            // Kita gunakan Storage::url() untuk mendapatkan URL yang benar
            $validatedData['foto_ktp'] = Storage::url($path);
        }

        // 3. Simpan semua data (termasuk path foto KTP) ke database
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
