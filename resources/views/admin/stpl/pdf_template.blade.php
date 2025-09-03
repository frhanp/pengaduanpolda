<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        /* ==== PRINT AREA ==== */
        @page {
            margin: 1cm;
        }

        /* ==== NAMESPACE SUPAYA TIDAK TABRAKAN ==== */
        .stpl {
            font-family: "Times New Roman", Times, serif;
            font-size: 12pt;
            line-height: 1.3;
        }

        .stpl p {
            margin: 5px 0;
        }

        /* Util kecil di-scope */
        .stpl .text-center {
            text-align: center;
        }

        .stpl .font-bold {
            font-weight: bold;
        }

        .stpl .underline {
            text-decoration: underline;
        }

        /* ==== KOP SURAT (rata kiri, line2 underline, lebih kecil dari judul) ==== */
        .stpl .kop-surat {
            text-align: left;
            /* RATA KIRI */
            /* border-bottom: 3px solid #000; */
            padding-bottom: 8px;
            margin-bottom: 10px;
        }

        .stpl .kop-surat .line1 {
            font-size: 12.5pt;
            /* < judul */
            font-weight: bold;
        }

        .stpl .kop-surat .line2 {
            font-size: 12.5pt;
            font-weight: bold;
            display: inline-block;
            /* wajib biar border nempel pas */
            border-bottom: 4px solid #000;
            /* lebih tebal */
            padding-bottom: 2px;
            /* jarak */

        }

        /* ==== JUDUL TENGAH (lebih besar dari kop) ==== */
        .stpl .judul-container p {
            margin-top: 1px;
            margin-bottom: 1px;
        }

        .stpl .judul-container .judul {
            font-size: 15pt;
        }

        /* > 12.5pt di kop */

        /* ==== TABEL KONTEN ==== */
        .stpl .content-table {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
            border-collapse: collapse;
        }

        .stpl .content-table td {
            vertical-align: top;
            padding: 0;
        }

        .stpl .content-table .label {
            width: 30%;
        }

        .stpl .content-table .separator {
            width: 5%;
            text-align: center;
        }

        .stpl .penutup {
            margin-top: 15px;
        }

        /* ==== TANDA TANGAN (float + clearfix aman untuk dompdf) ==== */
        .stpl .signature-section {
            margin-top: 30px;
            overflow: auto;
            /* contain float */
            width: 100%;
        }

        .stpl .signature-block-left,
        .stpl .signature-block-right {
            width: 45%;
            text-align: center;
        }

        .stpl .signature-block-left {
            float: left;
        }

        .stpl .signature-block-right {
            float: right;
        }

        .stpl .signature-section p {
            margin: 2px 0;
        }

        /* Ruang kosong untuk tanda tangan/stempel */
        .stpl .name-space {
            height: 100px;
        }

        .stpl .signature-section .name {
            font-weight: bold;
            text-decoration: underline;
        }

        /* Nama pelapor tidak bold (sesuai kebutuhan sebelumnya) */
        .stpl .signature-block-left .name {
            font-weight: normal;
        }

        /* Opsi kecil: hindari halaman pecah di area tanda tangan */
        .stpl .avoid-break {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    <div class="stpl">
        <!-- KOP SURAT -->
        <div class="kop-surat">
            <div class="line1">POLRI DAERAH GORONTALO</div>
            <div class="line1">RESOR GORONTALO KOTA</div>
            <div class="line2">SEKTOR {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA GORONTALO') }}</div>
        </div>

        <!-- JUDUL -->
        <div class="text-center judul-container">
            <img src="{{ public_path('images/polreslogocowo.png') }}" alt="Logo POLRI"
                style="width:80px; height:auto; margin-bottom:8px;">
            <p class="judul underline font-bold" style="margin-bottom: 5px;">SURAT TANDA PENERIMAAN LAPORAN</p>
            <p>Nomor: {{ $stpl->nomor_stpl }}</p>
        </div>

        <!-- PEMBUKA -->
        <p style="margin-top: 20px;">
            Berdasarkan Laporan Polisi Nomor: {{ $stpl->nomor_stpl }} tanggal
            {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}, dengan ini diterangkan bahwa pada hari ini
            {{ $stpl->tanggal_dibuat->translatedFormat('l') }} tanggal
            {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }} telah diterima Laporan dari:
        </p>

        <!-- DATA PELAPOR -->
        <table class="content-table">
            <tr>
                <td class="label">Nama</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->nama_pelapor }}</td>
            </tr>
            <tr>
                <td class="label">NIK</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->nik }}</td>
            </tr>
            <tr>
                <td class="label">Kewarganegaraan</td>
                <td class="separator">:</td>
                <td>INDONESIA</td>
            </tr>
            <tr>
                <td class="label">Jenis Kelamin</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->jenis_kelamin ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Tempat/Tanggal Lahir</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->tempat_lahir ?? '' }},
                    {{ $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('d-m-Y') : '-' }}</td>
            </tr>
            <tr>
                <td class="label">Umur</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->umur_pelapor ? $pengaduan->umur_pelapor . ' Tahun' : '-' }}</td>
            </tr>
            <tr>
                <td class="label">Pekerjaan</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Agama</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->agama ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->alamat_pelapor ?? '-' }}</td>
            </tr>
            <tr>
                <td class="label">No. Telp/HP</td>
                <td class="separator">:</td>
                <td>{{ $pengaduan->no_hp_pelapor }}</td>
            </tr>
        </table>

        <!-- ISI LAPORAN -->
        <p>
            Telah melaporkan tentang dugaan Tindak Pidana {{ $stpl->tindak_pidana }}, sebagaimana
            dimaksud
            dalam Pasal {{ $stpl->pasal_dilanggar }}, yang terjadi pada hari
            {{ $stpl->hari_kejadian }} tanggal
            {{ $stpl->tanggal_kejadian->translatedFormat('d F Y') }} di
            {{ $stpl->tempat_kejadian }} dengan terlapor {{ $stpl->terlapor }}.
        </p>

        <p style="margin-top: 2px;">Uraian singkat kejadian: {{ $stpl->uraian_kejadian }}</p>

        <p class="penutup">
            Demikian Surat Tanda Penerimaan Laporan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana
            mestinya.
        </p>

        <!-- TANDA TANGAN -->
        <div class="signature-section avoid-break">
            <!-- Pelapor (KIRI) -->
            <div class="signature-block-left">
                <p>&nbsp;</p>
                <p>Pelapor,</p>
                <p>&nbsp;</p>
                <div class="name-space"></div>
                <br>
                <p class="name">({{ strtoupper($pengaduan->nama_pelapor) }})</p>
            </div>

            <!-- Penerima (KANAN) -->
            <div class="signature-block-right">
                <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
                <p>Yang Menerima Laporan,</p>
                <p style="margin-bottom: 5px;">KA SPKT POLSEK
                    {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</p>

                <div class="name-space"></div>

                <p class="name">{{ $stpl->nama_penerima }}</p>
                <p>NRP. {{ $stpl->nrp_penerima }}</p>
            </div>
        </div>
    </div>
</body>

</html>
