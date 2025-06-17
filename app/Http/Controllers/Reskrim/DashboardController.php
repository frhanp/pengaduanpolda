<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan daftar laporan yang ditugaskan untuk reskrim yang login.
     */
    public function index()
    {
        $pengaduans = Pengaduan::where('assigned_to_reskrim_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('reskrim.dashboard', compact('pengaduans'));
    }

    /**
     * Menampilkan detail laporan yang ditugaskan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // Pastikan reskrim hanya bisa melihat tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403, 'AKSES DITOLAK');
        }

        return view('reskrim.show', compact('pengaduan'));
    }

    /**
     * Update status laporan oleh Reskrim.
     */
    public function updateStatus(Request $request, Pengaduan $pengaduan)
    {
        // Pastikan reskrim hanya bisa update tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'status' => 'required|string|in:Diproses,Selesai', // Batasi pilihan status
        ]);

        $pengaduan->update([
            'status' => $request->status,
        ]);

        return redirect()->route('reskrim.dashboard.show', $pengaduan)->with('success', 'Status laporan berhasil diperbarui.');
    }//
}
