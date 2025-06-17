<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard utama admin dengan daftar laporan masuk.
     */
    public function index()
    {
        $pengaduans = Pengaduan::with('verifier', 'assignee')
            ->latest() // Urutkan dari yang terbaru
            ->paginate(10); // Gunakan paginasi

        return view('admin.dashboard', compact('pengaduans'));
    }

    /**
     * Menampilkan detail satu pengaduan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // Ambil daftar user reskrim untuk form "Teruskan Laporan"
        $reskrimUsers = User::where('role', 'reskrim')->get();
        return view('admin.show', compact('pengaduan', 'reskrimUsers'));
    }

    /**
     * Proses verifikasi laporan oleh Admin.
     */
    public function verify(Pengaduan $pengaduan)
    {
        $pengaduan->update([
            'status' => 'Diverifikasi',
            'verified_by_admin_id' => Auth::id(), // ID admin yang sedang login
        ]);

        return redirect()->route('admin.dashboard.show', $pengaduan)->with('success', 'Laporan berhasil diverifikasi.');
    }

    /**
     * Meneruskan laporan ke anggota Reskrim.
     */
    public function forward(Request $request, Pengaduan $pengaduan)
    {
        $request->validate([
            'assigned_to_reskrim_id' => 'required|exists:users,id',
        ]);

        $pengaduan->update([
            'status' => 'Diteruskan ke Reskrim',
            'assigned_to_reskrim_id' => $request->assigned_to_reskrim_id,
        ]);

        return redirect()->route('admin.dashboard.show', $pengaduan)->with('success', 'Laporan berhasil diteruskan.');
    }
}
