<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>STPL - {{ $stpl->nomor_stpl }}</title>
    <style>
        /* CSS Dioptimalkan Maksimal untuk Satu Halaman dengan Margin 1cm */
        @page {
            margin: 1cm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.3; 
        }
        p {
            margin: 5px 0;
        }
        .text-center { text-align: center; }
        .font-bold { font-weight: bold; }
        .underline { text-decoration: underline; }

        .kop-surat {
            text-align: center;
            border-bottom: 3px solid black;
            padding-bottom: 8px;
            margin-bottom: 10px;
        }
        .kop-surat .line1 {
            font-size: 14pt;
            font-weight: bold;
        }
        .kop-surat .line2 {
            font-size: 14pt;
        }
        
        .judul-container p {
            margin-top: 1px;
            margin-bottom: 1px;
        }

        .content-table {
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .content-table td {
            vertical-align: top;
            padding: 0;
        }
        .content-table .label { width: 30%; }
        .content-table .separator { width: 5%; text-align: center; }

        .penutup { 
            margin-top: 15px;
        }

        /* PERUBAHAN CSS UNTUK TANDA TANGAN */
        .signature-section {
            margin-top: 30px; /* Memberi sedikit ruang tambahan */
            overflow: auto; /* Penting untuk 'contain' float elements */
            width: 100%;
        }
        /* Blok untuk tanda tangan Pelapor di KIRI */
        .signature-block-left {
            width: 45%;
            float: left;
            text-align: center;
        }
        /* Blok untuk tanda tangan Penerima di KANAN */
        .signature-block-right {
            width: 45%;
            float: right;
            text-align: center;
        }
        .signature-section p {
            margin: 2px 0;
        }
        .signature-section {
            /* Memberi ruang kosong untuk tanda tangan */
            height: 50px; 
        }

        .name-space {
            height: 100px;
        }
        .signature-section .name {
            font-weight: bold;
            text-decoration: underline;
        }
        /* Khusus untuk nama pelapor, sesuai gambar */
        .signature-block-left .name {
            font-weight: normal; /* Tidak bold */
        }
    </style>
</head>
<body>

    <div class="kop-surat">
        <div class="line1">KEPOLISIAN NEGARA REPUBLIK INDONESIA</div>
        <div class="line1">DAERAH GORONTALO</div>
        <div class="line2">SEKTOR {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</div>
    </div>

    <div class="text-center judul-container">
        <p class="judul underline font-bold" style="margin-bottom: 5px;">SURAT TANDA PENERIMAAN LAPORAN</p>
        <p>Nomor: {{ $stpl->nomor_stpl }}</p>
    </div>

    <p style="margin-top: 20px;">
        Berdasarkan Laporan Polisi Nomor: {{ $stpl->nomor_stpl }} tanggal {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}, dengan ini diterangkan bahwa pada hari ini {{ $stpl->tanggal_dibuat->translatedFormat('l') }} tanggal {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }} telah diterima Laporan dari:
    </p>

    <table class="content-table">
        <tr><td class="label">Nama</td><td class="separator">:</td><td>{{ $pengaduan->nama_pelapor }}</td></tr>
        <tr><td class="label">NIK</td><td class="separator">:</td><td>{{ $pengaduan->nik }}</td></tr>
        <tr><td class="label">Kewarganegaraan</td><td class="separator">:</td><td>INDONESIA</td></tr>
        <tr><td class="label">Jenis Kelamin</td><td class="separator">:</td><td>{{ $pengaduan->jenis_kelamin ?? '-' }}</td></tr>
        <tr><td class="label">Tempat/Tanggal Lahir</td><td class="separator">:</td><td>{{ $pengaduan->tempat_lahir ?? '' }}, {{ $pengaduan->tanggal_lahir ? $pengaduan->tanggal_lahir->format('d-m-Y') : '-' }}</td></tr>
        <tr><td class="label">Umur</td><td class="separator">:</td><td>{{ $pengaduan->umur_pelapor ? $pengaduan->umur_pelapor . ' Tahun' : '-' }}</td></tr>
        <tr><td class="label">Pekerjaan</td><td class="separator">:</td><td>{{ $pengaduan->pekerjaan_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">Agama</td><td class="separator">:</td><td>{{ $pengaduan->agama ?? '-' }}</td></tr>
        <tr><td class="label">Alamat</td><td class="separator">:</td><td>{{ $pengaduan->alamat_pelapor ?? '-' }}</td></tr>
        <tr><td class="label">No. Telp/HP</td><td class="separator">:</td><td>{{ $pengaduan->no_hp_pelapor }}</td></tr>
    </table>

    <p>
        Telah melaporkan tentang dugaan Tindak Pidana <strong>{{ $stpl->tindak_pidana }}</strong>, sebagaimana dimaksud dalam Pasal <strong>{{ $stpl->pasal_dilanggar }}</strong>, yang terjadi pada hari <strong>{{ $stpl->hari_kejadian }}</strong> tanggal <strong>{{ $stpl->tanggal_kejadian->translatedFormat('d F Y') }}</strong> di <strong>{{ $stpl->tempat_kejadian }}</strong>.
    </p>
    
    <p style="margin-top: 10px;">Uraian singkat kejadian:</p>
    <p>{{ $pengaduan->isi_laporan }}</p>

    <p class="penutup">
        Demikian Surat Tanda Penerimaan Laporan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.
    </p>

    <!-- PERUBAHAN HTML: Bagian Tanda Tangan -->
    <div class="signature-section">
        <!-- Tanda Tangan Pelapor (KIRI) -->
        <div class="signature-block-left">
            <!-- Menambahkan paragraf kosong untuk menyejajarkan posisi dengan blok kanan -->
            <p>&nbsp;</p>
            <p>Pelapor,</p>
            <p>&nbsp;</p>
            <div class="name-space"></div> <!-- Ruang untuk ttd basah -->
            <br>
            <p class="name">({{ strtoupper($pengaduan->nama_pelapor) }})</p>
        </div>

        <!-- Tanda Tangan Penerima Laporan (KANAN) -->
        <div class="signature-block-right">
            <p>Gorontalo, {{ $stpl->tanggal_dibuat->translatedFormat('d F Y') }}</p>
            <p>Yang Menerima Laporan,</p>
            <p style="margin-bottom: 5px;">KA SPKT POLSEK {{ strtoupper($pengaduan->tujuan_polsek ?? 'KOTA UTARA') }}</p>
            <div class="name-space"></div> <!-- Ruang untuk ttd basah & stempel -->
            <p class="name">{{ $stpl->creator->name }}</p>
            <p>NRP. ......................</p>
        </div>
    </div>

</body>
</html>
