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
     * Menampilkan halaman dashboard statistik untuk Admin.
     */
    public function index()
    {
        // Ambil data untuk statistik
        $totalLaporan = Pengaduan::count();
        $laporanBaru = Pengaduan::where('status', 'Baru')->count();
        $laporanDiverifikasi = Pengaduan::where('status', 'Diverifikasi')->count();
        $laporanDiteruskan = Pengaduan::where('status', 'Diteruskan')->count();
        $laporanSelesai = Pengaduan::where('status', 'Selesai')->count();

        // Kirim data ke view dashboard admin
        return view('admin.dashboard', compact(
            'totalLaporan',
            'laporanBaru',
            'laporanDiverifikasi',
            'laporanDiteruskan',
            'laporanSelesai'
        ));
    }

    /**
     * [FUNGSI BARU] Menampilkan daftar semua pengaduan dalam bentuk tabel.
     */
    public function listPengaduan(Request $request)
    {
        // Mulai dengan query dasar
        $query = Pengaduan::query();

        // Terapkan filter jika ada input 'status'
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Terapkan filter jika ada input 'search' (untuk nama atau NIK)
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama_pelapor', 'like', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            });
        }

        // Terapkan filter jika ada rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date . ' 23:59:59']);
        }

        // Setelah semua filter diterapkan, ambil data dengan paginasi
        $pengaduans = $query->latest()->paginate(10);

        // Kirim data ke view
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail satu pengaduan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // Ambil daftar user dengan role 'reskrim' untuk dropdown
        $reskrimUsers = User::where('role', 'reskrim')->get();

        // [PERBAIKAN] Arahkan ke view yang benar di dalam folder 'pengaduan'
        return view('admin.pengaduan.show', compact('pengaduan', 'reskrimUsers'));
    }

    public function verify(Pengaduan $pengaduan)
    {
        // Cek jika status bukan 'Baru'
        if ($pengaduan->status !== 'Baru') {
            return redirect()->route('admin.pengaduan.show', $pengaduan)->with('error', 'Laporan ini sudah pernah diverifikasi.');
        }

        $pengaduan->update([
            'status' => 'Diverifikasi',
            'verified_by_admin_id' => Auth::id(),
        ]);

        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diverifikasi.');
    }

    /**
     * Meneruskan pengaduan ke anggota Reskrim.
     */
    public function forward(Request $request, Pengaduan $pengaduan)
    {
        $request->validate(['assigned_to_reskrim_id' => 'required|exists:users,id']);

        $pengaduan->update([
            'status' => 'Diteruskan ke Reskrim',
            'assigned_to_reskrim_id' => $request->assigned_to_reskrim_id,
        ]);

        // [PERBAIKAN] Mengarahkan kembali ke rute yang benar
        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diteruskan.');
    }
}
