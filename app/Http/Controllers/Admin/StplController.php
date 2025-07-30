<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Stpl;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class StplController extends Controller
{
    public function index(Request $request)
    {
        // Mulai dengan query dasar, termasuk relasi ke pengaduan
        $query = Stpl::with('pengaduan');

        // Terapkan filter jika ada input 'search'
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                // Cari di kolom nomor_stpl
                $q->where('nomor_stpl', 'like', '%' . $searchTerm . '%')
                    // Atau cari di nama pelapor melalui relasi
                    ->orWhereHas('pengaduan', function ($subQ) use ($searchTerm) {
                        $subQ->where('nama_pelapor', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        // Terapkan filter jika ada rentang tanggal
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tanggal_dibuat', [$request->start_date, $request->end_date]);
        }

        // Setelah semua filter diterapkan, ambil data dengan paginasi
        $stpls = $query->latest()->paginate(10);

        // Kirim data ke view
        return view('admin.stpl.index', compact('stpls'));
    }

    /**
     * Menampilkan form untuk membuat STPL baru.
     * (Fungsi ini mungkin belum ada, kita tambahkan sekarang)
     */
    public function create(Pengaduan $pengaduan)
    {
        // [PERBAIKAN] Ubah logika untuk mengizinkan pembuatan STPL
        // selama laporan sudah diproses (bukan 'Baru') dan belum punya STPL.
        if ($pengaduan->status === 'Baru' || $pengaduan->stpl) {
            return redirect()->route('admin.pengaduan.show', $pengaduan)
                ->with('error', 'STPL tidak dapat dibuat untuk laporan ini. Pastikan laporan sudah diverifikasi dan belum ada STPL sebelumnya.');
        }

        return view('admin.stpl.create', compact('pengaduan'));
    }
    public function preview(Stpl $stpl)
    {
        $dataUntukPdf = [
            'stpl' => $stpl->load(['creator', 'pengaduan']),
            'pengaduan' => $stpl->pengaduan,
        ];

        $pdf = Pdf::loadView('admin.stpl.pdf_template', $dataUntukPdf);

        // stream() akan menampilkan PDF di browser, bukan men-download.
        return $pdf->stream('preview-stpl.pdf');
    }

    /**
     * Menyimpan data STPL yang baru dibuat dan men-generate PDF.
     * (Ini adalah method store Anda yang sudah disempurnakan)
     */
    /**
     * [PERUBAHAN UTAMA]
     * Menyimpan STPL dengan opsi nomor manual atau otomatis.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form, termasuk detail kejadian yang baru
        $validated = $request->validate([
            'pengaduan_id' => 'required|exists:pengaduans,id',
            'tanggal_dibuat' => 'required|date',
            'nomor_stpl_option' => 'required|in:otomatis,manual',
            'nomor_stpl' => 'required_if:nomor_stpl_option,manual|nullable|string|max:255|unique:stpl,nomor_stpl',

            // [PENAMBAHAN] Validasi untuk detail kejadian
            'tindak_pidana' => 'required|string|max:255',
            'pasal_dilanggar' => 'required|string|max:255',
            'hari_kejadian' => 'required|string|max:50',
            'tanggal_kejadian' => 'required|date',
            'tempat_kejadian' => 'required|string',
            'uraian_kejadian' => 'required|string',
            'terlapor' => 'required|string',
        ]);

        $pengaduan = Pengaduan::findOrFail($validated['pengaduan_id']);
        if ($pengaduan->stpl) {
            return back()->with('error', 'Laporan ini sudah memiliki STPL.');
        }

        // 2. Tentukan nomor STPL berdasarkan pilihan (tidak berubah)
        $nomorStplFinal = '';
        if ($validated['nomor_stpl_option'] === 'otomatis') {
            $nomorStplFinal = Stpl::generateStplNumber();
        } else {
            $nomorStplFinal = $validated['nomor_stpl'];
        }

        // 3. Simpan data STPL ke database, termasuk detail kejadian yang baru
        $stpl = Stpl::create([
            'pengaduan_id' => $pengaduan->id,
            'nomor_stpl' => $nomorStplFinal,
            'tanggal_dibuat' => $validated['tanggal_dibuat'],
            'dibuat_oleh_admin_id' => Auth::id(),

            // [PENAMBAHAN] Menyimpan data detail kejadian
            'tindak_pidana' => $validated['tindak_pidana'],
            'pasal_dilanggar' => $validated['pasal_dilanggar'],
            'hari_kejadian' => $validated['hari_kejadian'],
            'tanggal_kejadian' => $validated['tanggal_kejadian'],
            'tempat_kejadian' => $validated['tempat_kejadian'],
            'uraian_kejadian' => $validated['uraian_kejadian'],
            'terlapor' => $validated['terlapor'],
        ]);

        // 4. Redirect kembali ke halaman show dengan pesan sukses
        // (Ini adalah logika redirect Anda yang sebelumnya, tanpa download otomatis)
        return redirect()->route('admin.pengaduan.show', $pengaduan->id)
            ->with('success', 'STPL berhasil dibuat.');
    }


    public function download(Stpl $stpl)
    {
        $dataUntukPdf = [
            'stpl' => $stpl->load(['creator', 'pengaduan']),
            'pengaduan' => $stpl->pengaduan,
        ];

        $pdf = Pdf::loadView('admin.stpl.pdf_template', $dataUntukPdf);
        return $pdf->download('STPL-' . $stpl->nomor_stpl . '.pdf');
    }
}
