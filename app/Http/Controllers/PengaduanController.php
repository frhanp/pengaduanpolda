<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Pengaduan;
use App\Http\Requests\StorePengaduanRequest;


class PengaduanController extends Controller
{ public function index()
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
        // Controller menjadi sangat simpel! Hanya menyimpan data yang sudah divalidasi.
        // Lat/Long didapat dari form yang diisi oleh Leaflet.js
        Pengaduan::create($request->validated());

        return redirect('/')->with('success', 'Laporan Anda telah berhasil dikirim. Terima kasih!');
    }
}
