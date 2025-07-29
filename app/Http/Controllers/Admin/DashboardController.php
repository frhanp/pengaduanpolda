<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard statistik untuk Admin.
     */
    public function index(Request $request)
    {
        // --- Data untuk Kartu Statistik ---
        $totalLaporan = Pengaduan::count();
        $laporanBaru = Pengaduan::where('status', 'Baru')->count();
        $laporanDiverifikasi = Pengaduan::where('status', 'Diverifikasi')->count();
        $laporanSelesai = Pengaduan::where('status', 'Selesai')->count();

        // --- [PENAMBAHAN] Data untuk Analitik ---

        // 1. Grafik Garis: Tren Laporan Masuk
        $periode = $request->input('periode', '7hari');
        $days = match ($periode) {
            '30hari' => 30,
            '90hari' => 90,
            default => 7,
        };
        $laporanMasukHarian = Pengaduan::select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->whereBetween('created_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');
        
        $lineChartData = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i)->format('Y-m-d');
            $lineChartData[] = ['x' => $tanggal, 'y' => $laporanMasukHarian[$tanggal] ?? 0];
        }

        // 2. Grafik Lingkaran: Komposisi Status
        $statusCounts = Pengaduan::select('status', DB::raw('count(*) as jumlah'))
            ->groupBy('status')->pluck('jumlah', 'status');
        $donutChartData = [
            'labels' => $statusCounts->keys()->all(),
            'data' => $statusCounts->values()->all(),
        ];

        // 3. Grafik Batang: Laporan per Polsek
        $laporanPerPolsek = Pengaduan::select('tujuan_polsek', DB::raw('count(*) as jumlah'))
            ->groupBy('tujuan_polsek')->orderBy('jumlah', 'desc')->pluck('jumlah', 'tujuan_polsek');
        $barChartData = [
            'labels' => $laporanPerPolsek->keys()->all(),
            'data' => $laporanPerPolsek->values()->all(),
        ];
        
        // 4. Daftar Laporan Mendesak (5 laporan 'Baru' terlama)
        $laporanMendesak = Pengaduan::where('status', 'Baru')->orderBy('created_at', 'asc')->limit(5)->get();

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalLaporan', 'laporanBaru', 'laporanDiverifikasi', 'laporanSelesai',
            'lineChartData', 'donutChartData', 'barChartData', 'laporanMendesak',
            'periode'
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
    
    public function kembalikan(Request $request, Pengaduan $pengaduan)
    {
        // Pastikan hanya laporan 'Baru' yang bisa dikembalikan
        if ($pengaduan->status !== 'Baru') {
            return redirect()->route('admin.pengaduan.show', $pengaduan)->with('error', 'Laporan ini tidak dapat dikembalikan karena sudah diproses.');
        }
        
        // Validasi bahwa catatan wajib diisi
        $request->validate(['catatan' => 'required|string|min:10']);

        // Update status dan simpan catatan
        $pengaduan->update([
            'status' => 'Dikembalikan',
            'catatan_pengembalian' => $request->catatan,
        ]);

        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan telah dikembalikan ke pelapor dengan catatan.');
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
