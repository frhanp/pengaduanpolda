<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Stpl;
use Illuminate\Support\Facades\Auth;

class StplController extends Controller
{
    /**
     * Menyimpan data STPL yang baru dibuat.
     */
    public function store(Request $request, Pengaduan $pengaduan)
    {
        // Cek jika pengaduan sudah punya STPL
        if ($pengaduan->stpl) {
            return back()->with('error', 'Laporan ini sudah memiliki STPL.');
        }

        $request->validate([
            'nomor_stpl' => 'required|string|unique:stpl,nomor_stpl',
            'tanggal_dibuat' => 'required|date',
        ]);

        Stpl::create([
            'pengaduan_id' => $pengaduan->id,
            'nomor_stpl' => $request->nomor_stpl,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'dibuat_oleh_admin_id' => Auth::id(),
        ]);

        return redirect()->route('admin.dashboard.show', $pengaduan)->with('success', 'STPL berhasil dibuat.');
    }
}
