<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; font-size: 12pt; margin: 2.5cm; }
        .kop-surat { text-align: center; border-bottom: 3px solid black; padding-bottom: 10px; margin-bottom: 30px; }
        .kop-surat h3, .kop-surat h4 { margin: 0; }
        .judul { text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: 5px; }
        .nomor-surat { text-align: center; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; }
        td { vertical-align: top; padding: 2px 0; }
        .label { width: 180px; }
        .penutup { margin-top: 40px; }
        .tanda-tangan { margin-top: 80px; width: 300px; float: right; text-align: center; }
    </style>
</head>
<body>

    <div class="kop-surat">
        <h3>KEPOLISIAN NEGARA REPUBLIK INDONESIA</h3>
        <h4>DAERAH GORONTALO</h4>
        <p style="margin: 0;">Jl. Jenderal Sudirman No. 123, Gorontalo</p>
    </div>

    <p class="judul">SURAT TANDA PENERIMAAN LAPORAN</p>
    <p class="nomor-surat">Nomor: {{ $stpl->nomor_stpl }}</p>

    <p>Pada hari ini, {{ $stpl->tanggal_dibuat->translatedFormat('l, d F Y') }}, yang bertanda tangan di bawah ini, selaku Penyidik/Penyidik Pembantu pada kantor Kepolisian tersebut di atas, telah menerima laporan dari:</p>

    <table>
        <tr><td class="label">Nama</td><td>: {{ $pengaduan->nama_pelapor }}</td></tr>
        <tr><td class="label">NIK</td><td>: {{ $pengaduan->nik }}</td></tr>
        <tr><td class="label">Pekerjaan</td><td>: {{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">Alamat</td><td>: {{ $pengaduan->alamat_pelapor ?? '-' }}</td></tr>
    </table>

    <p class="penutup">Dengan uraian kejadian secara singkat sebagai berikut:</p>
    <p>{{ $pengaduan->isi_laporan }}</p>

    <p class="penutup">Demikian Surat Tanda Penerimaan Laporan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>

    <div class="tanda-tangan">
        <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
        <p>Yang Menerima Laporan,</p>
        <br><br><br><br>
        {{-- Mengambil nama admin yang login saat membuat STPL --}}
        <p style="text-decoration: underline; font-weight: bold;">{{ $stpl->creator->name }}</p>
        <p>NRP. ......................</p>
    </div>

</body>
</html>