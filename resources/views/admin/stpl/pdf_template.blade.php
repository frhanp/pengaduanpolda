<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        /* CSS ini dirancang agar terlihat bagus saat di-generate menjadi PDF oleh DomPDF */
        @page {
            margin: 2.5cm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.5;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .font-bold {
            font-weight: bold;
        }
        .underline {
            text-decoration: underline;
        }
        .kop-surat {
            text-align: center;
            border-bottom: 3px solid black;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .kop-surat .line1 {
            font-size: 14pt;
            font-weight: bold;
        }
        .kop-surat .line2 {
            font-size: 14pt;
        }
        .pro-justitia {
            position: absolute;
            top: 2.5cm;
            right: 2.5cm;
            font-style: italic;
        }
        .content-table {
            width: 100%;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .content-table td {
            vertical-align: top;
            padding: 1px 0;
        }
        .content-table .label {
            width: 30%;
        }
        .content-table .separator {
            width: 5%;
            text-align: center;
        }
        .footer-note {
            margin-top: 50px;
            font-size: 10pt;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .signature-section {
            margin-top: 50px;
        }
        .signature-block {
            width: 320px;
            float: right;
            text-align: center;
        }
        .signature-block .name {
            margin-top: 80px; /* Jarak untuk tanda tangan dan stempel */
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="pro-justitia">
        "PRO JUSTITIA"
    </div>

    <div class="kop-surat">
        <div class="line1">KEPOLISIAN NEGARA REPUBLIK INDONESIA</div>
        <div class="line1">DAERAH GORONTALO</div>
        <div class="line2">SEKTOR {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</div>
    </div>

    <div class="text-center">
        <p class="judul underline font-bold">SURAT TANDA PENERIMAAN LAPORAN</p>
        <p>Nomor: {{ $stpl->nomor_stpl }}</p>
    </div>

    <p style="margin-top: 30px;">
        Berdasarkan Laporan Polisi Nomor: {{ $stpl->nomor_stpl }} tanggal {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}, dengan ini diterangkan bahwa pada hari ini {{ $stpl->tanggal_dibuat->translatedFormat('l') }} tanggal {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }} telah diterima Laporan dari:
    </p>

    <table class="content-table">
        <tr><td class="label">Nama</td><td class="separator">:</td><td>{{ $pengaduan->nama_pelapor }}</td></tr>
        <tr><td class="label">Nomor Identitas (NIK)</td><td class="separator">:</td><td>{{ $pengaduan->nik }}</td></tr>
        <tr><td class="label">Tempat/Tanggal Lahir</td><td class="separator">:</td><td>-</td></tr>
        <tr><td class="label">Jenis Kelamin</td><td class="separator">:</td><td>-</td></tr>
        <tr><td class="label">Pekerjaan</td><td class="separator">:</td><td>{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">Kewarganegaraan</td><td class="separator">:</td><td>INDONESIA</td></tr>
        <tr><td class="label">Alamat</td><td class="separator">:</td><td>{{ $pengaduan->alamat_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">No. Telp/HP</td><td class="separator">:</td><td>{{ $pengaduan->no_hp_pelapor }}</td></tr>
    </table>

    <p>
        Telah melaporkan tentang dugaan Tindak Pidana **{{ $pengaduan->jenis_tindak_pidana ?? '...' }}**, sebagaimana dimaksud dalam Pasal **{{ $pengaduan->pasal_dilanggar ?? '...' }}**, yang terjadi pada hari **...** tanggal **...** di **{{ $pengaduan->alamat_kejadian ?? '...' }}**.
    </p>
    
    <p>Uraian singkat kejadian:</p>
    <p>{{ $pengaduan->isi_laporan }}</p>

    <p style="margin-top: 30px;">
        Demikian Surat Tanda Penerimaan Laporan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.
    </p>

    <div class="signature-section">
        <div class="signature-block">
            <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
            <p>Yang Menerima Laporan,</p>
            <p>KA SPKT POLSEK {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</p>
            
            <p class="name">{{ $stpl->creator->name }}</p>
            <p>NRP. ......................</p>
        </div>
    </div>

    {{-- <div class="footer-note">
        <strong>Catatan:</strong> Perkembangan penanganan perkara dapat saudara monitor melalui website https://sp2hp.bareskrim.polri.go.id/
    </div> --}}

</body>
</html>