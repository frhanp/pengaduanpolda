<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard ringkasan untuk Reskrim.
     */
    public function index(Request $request)
    {
        // --- Statistik untuk Kartu (tidak berubah) ---
        $totalTugas = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->count();
        $tugasDiproses = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Diproses')->count();
        $tugasSelesai = Pengaduan::where('assigned_to_reskrim_id', Auth::id())->where('status', 'Selesai')->count();

        // --- [PERUBAHAN] Logika untuk menyiapkan data chart ---

        // 1. Tentukan periode waktu, defaultnya 7 hari.
        $periode = $request->input('periode', '7hari');
        $days = match ($periode) {
            '30hari' => 30,
            '90hari' => 90,
            default => 7,
        };

        // 2. Ambil data TUGAS DITERIMA per hari
        $laporanDiterima = Pengaduan::select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('assigned_to_reskrim_id', Auth::id())
            ->whereBetween('created_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');

        // 3. Ambil data TUGAS DISELESAIKAN per hari
        $laporanSelesai = Pengaduan::select(DB::raw('DATE(updated_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('assigned_to_reskrim_id', Auth::id())
            ->where('status', 'Selesai')
            ->whereBetween('updated_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');

        // 4. Siapkan array data untuk grafik garis (line chart)
        $lineChartData = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i)->format('Y-m-d');
            $lineChartData['labels'][] = Carbon::parse($tanggal)->translatedFormat('d M');
            $lineChartData['diterima'][] = $laporanDiterima[$tanggal] ?? 0;
            $lineChartData['selesai'][] = $laporanSelesai[$tanggal] ?? 0;
        }

        // 5. Siapkan data untuk grafik lingkaran (donut chart)
        $donutChartData = [
            'labels' => ['Diproses', 'Selesai'],
            'data' => [$tugasDiproses, $tugasSelesai],
        ];

        // 6. Kirim semua data ke view
        return view('reskrim.dashboard', compact(
            'totalTugas',
            'tugasDiproses',
            'tugasSelesai',
            'lineChartData', // Data baru untuk line chart
            'donutChartData', // Data baru untuk donut chart
            'periode'
        ));
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
            // [PERUBAHAN] Kembalikan 'Selesai' sebagai opsi valid
            'status' => 'required|string|in:Diproses,Selesai',
        ]);

        $pengaduan->update([
            'status' => $request->status,
        ]);

        // [PERBAIKAN] Arahkan kembali ke rute yang benar
        return redirect()->route('reskrim.tugas.show', $pengaduan)->with('success', 'Status laporan berhasil diperbarui.');
    }
}
