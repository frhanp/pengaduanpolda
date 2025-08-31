<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Events\StatusDiubah;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard statistik untuk Admin.
     */
    public function index(Request $request)
    {
        $unitKerja = Auth::user()->unit_kerja;

        // --- Data untuk Kartu Statistik (tidak berubah) ---
        $totalLaporan = Pengaduan::where('tujuan_polsek', $unitKerja)->count();
        $laporanBaru = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Baru')->count();
        $laporanDiverifikasi = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Diverifikasi')->count();
        $laporanSelesai = Pengaduan::where('tujuan_polsek', $unitKerja)->where('status', 'Selesai')->count();

        // --- Data untuk Analitik ---

        // 1. Grafik Garis: Tren Laporan Masuk (tidak berubah)
        $periode = $request->input('periode', '7hari');
        $days = match ($periode) {
            '30hari' => 30,
            '90hari' => 90,
            default => 7,
        };
        $laporanMasukHarian = Pengaduan::select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as jumlah'))
            ->where('tujuan_polsek', $unitKerja)
            ->whereBetween('created_at', [Carbon::now()->subDays($days - 1), Carbon::now()])
            ->groupBy('tanggal')->pluck('jumlah', 'tanggal');
        $lineChartData = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i)->format('Y-m-d');
            $lineChartData[] = ['x' => $tanggal, 'y' => $laporanMasukHarian[$tanggal] ?? 0];
        }

        // [PERUBAHAN] 2. Grafik Batang: Beban Kerja Tim Reskrim
        $bebanKerjaReskrim = User::where('role', 'reskrim')
            ->where('unit_kerja', $unitKerja)
            ->withCount(['pengaduans as tugas_aktif_count' => function ($query) {
                $query->whereIn('status', ['Diteruskan ke Reskrim', 'Diproses']);
            }])
            ->get();

        $barChartData = [
            'labels' => $bebanKerjaReskrim->pluck('name')->all(),
            'data' => $bebanKerjaReskrim->pluck('tugas_aktif_count')->all(),
        ];

        // 3. Daftar Laporan Mendesak (tidak berubah)
        $laporanMendesak = Pengaduan::where('tujuan_polsek', $unitKerja)
            ->where('status', 'Baru')->orderBy('created_at', 'asc')->limit(5)->get();

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalLaporan',
            'laporanBaru',
            'laporanDiverifikasi',
            'laporanSelesai',
            'lineChartData',
            'barChartData',
            'laporanMendesak',
            'periode'
        ));
    }


    /**
     * [FUNGSI BARU] Menampilkan daftar semua pengaduan dalam bentuk tabel.
     */
    public function listPengaduan(Request $request)
    {
        // [PERUBAHAN] Ambil unit kerja admin yang sedang login
        $unitKerja = Auth::user()->unit_kerja;

        // [PERUBAHAN] Mulai query dengan filter unit kerja, bukan Pengaduan::query()
        $query = Pengaduan::where('tujuan_polsek', $unitKerja);

        // Terapkan filter tambahan jika ada input 'status' (logika ini tidak berubah)
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Terapkan filter jika ada input 'search' (logika ini tidak berubah)
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama_pelapor', 'like', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'like', '%' . $searchTerm . '%');
            });
        }

        // Terapkan filter jika ada rentang tanggal (logika ini tidak berubah)
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
        // [PERUBAHAN] Keamanan: Pastikan admin hanya bisa melihat laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'AKSES DITOLAK');
        }

        // [PERUBAHAN] Ambil daftar user reskrim DARI UNIT KERJA YANG SAMA
        $reskrimUsers = User::where('role', 'reskrim')
            ->where('unit_kerja', Auth::user()->unit_kerja)
            ->get();

        return view('admin.pengaduan.show', compact('pengaduan', 'reskrimUsers'));
    }

    /**
     * Mengembalikan laporan ke pelapor dengan catatan.
     */
    public function kembalikan(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        if ($pengaduan->status !== 'Baru') { /* ... (logika tidak berubah) ... */
        }
        $request->validate(['catatan' => 'required|string|min:10']);
        $pengaduan->update(['status' => 'Dikembalikan', 'catatan_pengembalian' => $request->catatan]);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Dikembalikan',
            'catatan'    => $request->catatan,
            'updated_by' => Auth:: id(),
        ]);
        event(new StatusDiubah($pengaduan, $riwayat));
        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan telah dikembalikan.');
    }

    /**
     * Memverifikasi sebuah pengaduan.
     */
    public function verify(Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        if ($pengaduan->status !== 'Baru') { /* ... (logika tidak berubah) ... */
        }
        $pengaduan->update(['status' => 'Diverifikasi', 'verified_by_admin_id' => Auth::id()]);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Diverifikasi',
            'catatan'    => 'Laporan telah diverifikasi oleh admin.',
            'updated_by' => Auth::id(),
        ]);

        event(new StatusDiubah($pengaduan, $riwayat));
        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diverifikasi.');
    }

    /**
     * Meneruskan pengaduan ke anggota Reskrim.
     */
    public function forward(Request $request, Pengaduan $pengaduan)
    {
        // Keamanan: Pastikan admin hanya bisa memproses laporan untuk unitnya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403);
        }

        // Validasi bahwa user reskrim yang dipilih memang ada dan berasal dari unit yang sama
        $request->validate([
            'assigned_to_reskrim_id' => [
                'required',
                'exists:users,id',
                function ($attribute, $value, $fail) {
                    $user = User::find($value);
                    if (!$user || $user->unit_kerja !== Auth::user()->unit_kerja) {
                        $fail('Anggota Reskrim yang dipilih tidak valid.');
                    }
                },
            ],
        ]);

        $pengaduan->update([
            'status' => 'Diteruskan ke Reskrim',
            'assigned_to_reskrim_id' => $request->assigned_to_reskrim_id,
        ]);

        $userReskrim = User::find($request->assigned_to_reskrim_id);
        $riwayat = $pengaduan->riwayatStatus()->create([
            'status'     => 'Diteruskan ke Reskrim',
            'catatan'    => 'Laporan diteruskan ke tim Reskrim: ' . $userReskrim->name,
            'updated_by' => Auth::id(),
        ]);
        event(new StatusDiubah($pengaduan, $riwayat));

        return redirect()->route('admin.pengaduan.show', $pengaduan)->with('success', 'Laporan berhasil diteruskan.');
    }
}
