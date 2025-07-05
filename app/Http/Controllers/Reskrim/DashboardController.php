<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   /**
     * Menampilkan halaman dashboard ringkasan untuk Reskrim.
     */
    public function index()
    {
        // Hitung statistik untuk Reskrim yang login
        $totalTugas = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->count();
        $tugasDiproses = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Diproses')->count();
        $tugasSelesai = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Selesai')->count();
        
        return view('reskrim.dashboard', compact('totalTugas', 'tugasDiproses', 'tugasSelesai'));
    }

    /**
     * Menampilkan daftar tugas laporan dalam tabel.
     */
    public function listTugas(Request $request)
    {
        // Mulai dengan query dasar, hanya untuk tugas milik reskrim yang login
        $query = Pengaduan::where('assigned_to_reskrim_id', Auth::id());

        // Terapkan filter jika ada input 'status'
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Terapkan filter jika ada input 'search' (untuk nama atau NIK)
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
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
        return view('reskrim.tugas.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail satu tugas laporan.
     */
    public function show(Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan reskrim hanya bisa melihat tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403, 'AKSES DITOLAK');
        }

        return view('reskrim.tugas.show', compact('pengaduan'));
    }

    /**
     * Update status laporan oleh Reskrim.
     */
    public function updateStatus(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan reskrim hanya bisa update tugasnya sendiri
        if ($pengaduan->assigned_to_reskrim_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            // [PERUBAHAN] Ganti 'Selesai' dengan 'Diteruskan ke Penyidik'
            'status' => 'required|string|in:Diproses,Diteruskan ke Penyidik',
        ]);

        $pengaduan->update([
            'status' => $request->status,
        ]);

        // [PERBAIKAN] Arahkan kembali ke rute yang benar
        return redirect()->route('reskrim.tugas.show', $pengaduan)->with('success', 'Status laporan berhasil diperbarui.');
    }
}
