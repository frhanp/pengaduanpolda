<?php

namespace App\Http\Controllers\Reskrim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratPernyataan;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class SuratPernyataanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(['pengaduan_id' => 'required|exists:pengaduans,id']);
        $pengaduan = Pengaduan::findOrFail($request->pengaduan_id);

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
        // [PERUBAHAN] Menambahkan validasi untuk pejabat_mengetahui dan memecah ttl
        $validatedData = $request->validate([
            'tempat_dibuat'       => 'required|string|max:255',
            'pejabat_mengetahui'  => 'required|string|max:255',
            'isi_pernyataan'      => 'required|array|min:1',
            'isi_pernyataan.*'    => 'required|string',
            'pihak'               => 'required|array|min:2|max:4',
            'pihak.*.nama'        => 'required|string|max:255',
            'pihak.*.tempat_lahir' => 'required|string|max:255',
            'pihak.*.tanggal_lahir' => 'required|date',
            'pihak.*.pekerjaan'     => 'required|string|max:255',
            'pihak.*.alamat'      => 'required|string',
            'pihak.*.agama'       => 'required|string|max:255',
            'saksi'               => 'nullable|array',
            'saksi.*.nama'        => 'required_with:saksi|string|max:255',
        ]);

        if ($pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'Akses Ditolak');
        }

        // [PERUBAHAN] Gabungkan tempat dan tanggal lahir menjadi satu string 'ttl' sebelum disimpan
        $pihakData = array_map(function ($p) {
            $p['ttl'] = $p['tempat_lahir'] . ', ' . \Carbon\Carbon::parse($p['tanggal_lahir'])->translatedFormat('d F Y');
            unset($p['tempat_lahir'], $p['tanggal_lahir']); // Hapus field individual
            return $p;
        }, $validatedData['pihak']);

        $isiPernyataanString = implode("\n", $validatedData['isi_pernyataan']);

        $surat = SuratPernyataan::create([
            'pengaduan_id'           => $pengaduan->id,
            'dibuat_oleh_reskrim_id' => Auth::id(),
            'pihak_terlibat'         => $pihakData, // Simpan data pihak yang sudah digabung
            'saksi_terlibat'         => $validatedData['saksi'] ?? [],
            'isi_pernyataan'         => $isiPernyataanString,
            'tempat_dibuat'          => $validatedData['tempat_dibuat'],
            'pejabat_mengetahui'     => $validatedData['pejabat_mengetahui'], // Simpan nama pejabat
        ]);

        return redirect()->route('reskrim.tugas.show', $pengaduan->id)
                         ->with('success', 'Surat Pernyataan berhasil dibuat.');
    }

    /**
     * Menghasilkan dan mengunduh file PDF dari Surat Pernyataan.
     */
    public function download(SuratPernyataan $suratPernyataan)
    {
        if ($suratPernyataan->pengaduan->tujuan_polsek !== Auth::user()->unit_kerja) {
            abort(403, 'AKSES DITOLAK');
        }
        $pdf = Pdf::loadView('reskrim.surat-pernyataan.pdf_template', compact('suratPernyataan'));
        return $pdf->download('Surat-Pernyataan-' . $suratPernyataan->pengaduan->id . '.pdf');
    }

    public function preview(Request $request)
    {
        // [PERUBAHAN] Menambahkan validasi untuk pejabat_mengetahui dan memecah ttl
        $validatedData = $request->validate([
            'pengaduan_id'        => 'required|exists:pengaduans,id',
            'tempat_dibuat'       => 'required|string|max:255',
            'pejabat_mengetahui'  => 'required|string|max:255',
            'isi_pernyataan'      => 'required|array|min:1',
            'isi_pernyataan.*'    => 'required|string',
            'pihak'               => 'required|array|min:2|max:4',
            'pihak.*.nama'        => 'required|string|max:255',
            'pihak.*.tempat_lahir' => 'required|string|max:255',
            'pihak.*.tanggal_lahir' => 'required|date',
            'pihak.*.pekerjaan'     => 'required|string|max:255',
            'pihak.*.alamat'      => 'required|string',
            'pihak.*.agama'       => 'required|string|max:255',
            'saksi'               => 'nullable|array',
            'saksi.*.nama'        => 'required_with:saksi|string|max:255',
        ]);
        
        // [PERUBAHAN] Gabungkan tempat dan tanggal lahir untuk pratinjau
        $pihakData = array_map(function ($p) {
            $p['ttl'] = $p['tempat_lahir'] . ', ' . \Carbon\Carbon::parse($p['tanggal_lahir'])->translatedFormat('d F Y');
            return $p;
        }, $validatedData['pihak']);

        $isiPernyataanString = implode("\n", $validatedData['isi_pernyataan']);

        $suratPernyataan = new SuratPernyataan([
            'pihak_terlibat' => $pihakData, // Kirim data yang sudah digabung ke view
            'saksi_terlibat' => $validatedData['saksi'] ?? [],
            'isi_pernyataan' => $isiPernyataanString,
            'tempat_dibuat'  => $validatedData['tempat_dibuat'],
            'pejabat_mengetahui' => $validatedData['pejabat_mengetahui'], // Kirim nama pejabat ke view
        ]);
        
        $suratPernyataan->created_at = now();

        $pdf = Pdf::loadView('reskrim.surat-pernyataan.pdf_template', compact('suratPernyataan'));
        return $pdf->stream('preview-surat-pernyataan.pdf');
    }
}