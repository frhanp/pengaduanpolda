<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\SuratPernyataan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SuratPernyataanController extends Controller
{
    public function store(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan hanya reskrim yang ditugaskan yang bisa upload
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'file_pernyataan' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120', // Maks 5MB
        ]);

        $path = $request->file('file_pernyataan')->store('surat_pernyataan', 'public');

        SuratPernyataan::create([
            'pengaduan_id' => $pengaduan->id,
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'path_file' => $path,
        ]);

        return redirect()->back()->with('success', 'Dokumen berhasil diunggah.');
    }

    public function download(SuratPernyataan $suratPernyataan)
    {
        // Keamanan: Pastikan hanya reskrim yang ditugaskan yang bisa download
        if ($suratPernyataan->pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        return Storage::disk('public')->download($suratPernyataan->path_file);
    }
}
