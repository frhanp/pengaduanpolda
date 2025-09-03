<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\SuratPernyataan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratPernyataanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(['pengaduan_id' => 'required|exists:pengaduans,id']);
        $pengaduan = Pengaduan::findOrFail($request->pengaduan_id);

        // Keamanan: Pastikan reskrim hanya bisa membuat surat untuk unit kerjanya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'Akses Ditolak');
        }

        return view('reskrim.surat-pernyataan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pengaduan $pengaduan)
    {
        $validatedData = $request->validate([
            'tempat_dibuat'   => 'required|string|max:255',
            'isi_pernyataan'  => 'required|string',
            'pihak'           => 'required|array|min:2|max:4',
            'pihak.*.nama'    => 'required|string|max:255',
            'pihak.*.ttl'     => 'required|string|max:255',
            'pihak.*.pekerjaan' => 'required|string|max:255',
            'pihak.*.alamat'  => 'required|string',
            'pihak.*.agama'   => 'required|string|max:255',
            
        ]);

        // Keamanan: Pastikan reskrim hanya bisa membuat surat untuk unit kerjanya
        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'Akses Ditolak');
        }

        // Simpan data ke database
        $surat = SuratPernyataan::create([
            'pengaduan_id'           => $pengaduan->id,
            'dibuat_oleh_reskrim_id' => Auth::id(),
            'pihak_terlibat'         => $validatedData['pihak'],
            'isi_pernyataan'         => $validatedData['isi_pernyataan'],
            'tempat_dibuat'          => $validatedData['tempat_dibuat'],
        ]);

        return redirect()->route('reskrim.tugas.show', $pengaduan->id)
                         ->with('success', 'Surat Pernyataan berhasil dibuat.');
    }

    public function download(SuratPernyataan $suratPernyataan)
    {
        // Keamanan: Pastikan reskrim hanya bisa mengakses surat dari unit kerjanya
        if ($suratPernyataan->pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'AKSES DITOLAK');
        }

        // Render view PDF dengan data yang ada
        $pdf = Pdf::loadView('reskrim.surat-pernyataan.pdf_template', compact('suratPernyataan'));
        
        // Unduh PDF dengan nama file yang dinamis
        return $pdf->download('Surat-Pernyataan-' . $suratPernyataan->pengaduan->id . '.pdf');
    }

    /**
     * Menampilkan pratinjau Surat Pernyataan tanpa menyimpannya.
     */
    public function preview(Request $request)
    {
        $validatedData = $request->validate([
            'pengaduan_id'    => 'required|exists:pengaduans,id',
            'tempat_dibuat'   => 'required|string|max:255',
            'isi_pernyataan'  => 'required|string',
            'pihak'           => 'required|array|min:2|max:4',
            'pihak.*.nama'    => 'required|string|max:255',
            'pihak.*.ttl'     => 'required|string|max:255',
            'pihak.*.pekerjaan' => 'required|string|max:255',
            'pihak.*.alamat'  => 'required|string',
            'pihak.*.agama'   => 'required|string|max:255',
        ]);

        // Buat instance model sementara tanpa menyimpannya ke database
        $suratPernyataan = new SuratPernyataan([
            'pihak_terlibat' => $validatedData['pihak'],
            'isi_pernyataan' => $validatedData['isi_pernyataan'],
            'tempat_dibuat'  => $validatedData['tempat_dibuat'],
        ]);
        
        // Atur tanggal secara manual untuk pratinjau
        $suratPernyataan->created_at = now();

        $pdf = Pdf::loadView('reskrim.surat-pernyataan.pdf_template', compact('suratPernyataan'));
        
        // Tampilkan PDF langsung di browser
        return $pdf->stream('preview-surat-pernyataan.pdf');
    }
}
