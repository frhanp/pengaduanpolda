{{-- resources/views/reskrim/surat-pernyataan/pdf_template.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Pernyataan</title>
    <style>
        /* F4/Folio 210 x 330 mm */
        @page {
            size: 210mm 330mm;
            margin: 1.6cm;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            line-height: 1.35;
        }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .underline {
            text-decoration: underline;
        }

        p {
            margin: 0 0 4px 0;
        }

        .judul {
            font-size: 14pt;
            margin-bottom: 12px;
        }

        .pembuka {
            margin-bottom: 8px;
        }

        /* ==== Identitas Pihak ==== */
        .pihak-table {
            width: 100%;
            margin-left: 8px;
            border-collapse: collapse;
            margin-bottom: 4px;
        }

        .pihak-table td {
            vertical-align: top;
            padding: 0;
        }

        .pihak-table .nomor {
            width: 5%;
        }

        .pihak-table .label {
            width: 22%;
        }

        .pihak-table .separator {
            width: 4%;
        }

        .pihak-table .value {
            width: 69%;
        }

        /* ==== Isi Pernyataan ==== */
        .subjudul {
            margin: 8px 0 6px;
            font-weight: bold;
            text-decoration: underline;
        }

        .isi-pernyataan ol {
            margin: 0 0 0 18px;
            padding: 0;
            list-style-position: outside;
        }

        .isi-pernyataan li {
            margin: 3px 0;
            padding-left: 5px;
            text-align: justify;
        }

        .penutup {
            margin-top: 10px;
            text-align: justify;
            text-indent: 36px;
        }

        /* ==== Tanda Tangan Pihak ==== */
        .ttd-table {
            width: 100%;
            margin-top: 14px;
            border-collapse: collapse;
        }

        .ttd-table td {
            width: 50%;
            text-align: center;
            vertical-align: top;
            padding: 0 8px;
        }

        .space-ttd {
            height: 48px;
        }

        .nama-ttd {
            margin-top: 0;
            text-decoration: underline;
            font-weight: bold;
        }

        /* ==== Saksi & Mengetahui ==== */
        .footer-grid {
            width: 100%;
            margin-top: 12px;
        }

        .footer-grid td {
            vertical-align: top;
        }

        .saksi-table {
            width: 100%;
            border-collapse: collapse;
        }

        .saksi-table td {
            padding: 2px 0;
        }

        .avoid-break {
            page-break-inside: avoid;
        }

        .saksi-table td {
            padding: 12px 0;
        }
    </style>
</head>

<body>
    @php
        // Mengambil data pihak dan saksi dari kolom yang sudah terpisah
        $pihak = $suratPernyataan->pihak_terlibat ?? [];
        $saksi = $suratPernyataan->saksi_terlibat ?? [];
    @endphp

    <div class="judul text-center font-bold underline">SURAT PERNYATAAN</div>

    <div class="pembuka">
        <p>Yang bertanda tangan di bawah ini :</p>
    </div>

    {{-- Loop untuk menampilkan data PIHAK --}}
    @foreach ($pihak as $index => $ph)
        <table class="pihak-table avoid-break">
            <tr>
                <td class="nomor">{{ $index + 1 }}.</td>
                <td class="label">Nama</td>
                <td class="separator">:</td>
                <td class="value"><strong>{{ strtoupper($ph['nama']) }}</strong></td>
            </tr>
            <tr>
                <td></td>
                <td class="label">Umur</td>
                <td class="separator">:</td>
                <td class="value">{{ $ph['ttl'] ?? '-' }}</td>
            </tr>
            <tr>
                <td></td>
                <td class="label">Pekerjaan</td>
                <td class="separator">:</td>
                <td class="value">{{ $ph['pekerjaan'] ?? '-' }}</td>
            </tr>
            <tr>
                <td></td>
                <td class="label">Agama</td>
                <td class="separator">:</td>
                <td class="value">{{ $ph['agama'] ?? '-' }}</td>
            </tr>
            <tr>
                <td></td>
                <td class="label">Alamat</td>
                <td class="separator">:</td>
                <td class="value">{{ $ph['alamat'] ?? '-' }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">(Pihak {{ ['Pertama', 'Kedua', 'Ketiga', 'Keempat'][$index] ?? '...' }})</td>
            </tr>
        </table>
    @endforeach

    <div class="subjudul">Dengan ini menyatakan sebagai berikut :</div>

    {{-- [PERUBAHAN UTAMA] Menampilkan isi pernyataan sebagai daftar bernomor --}}
    <div class="isi-pernyataan">
        @php
            // Memecah string isi pernyataan menjadi array berdasarkan baris baru
            $poinPernyataan = explode("\n", trim((string) $suratPernyataan->isi_pernyataan));
        @endphp
        <ol>
            @foreach ($poinPernyataan as $poin)
                <li>{!! nl2br(e(trim($poin))) !!}</li>
            @endforeach
        </ol>
    </div>

    {{-- 
     --}}

    <p class="text-center" style="margin-top: 10px;">
        {{ $suratPernyataan->tempat_dibuat }}, {{ $suratPernyataan->created_at->translatedFormat('d F Y') }}
    </p>
    <p class="text-center">Yang membuat pernyataan</p>

    {{-- TTD untuk PIHAK --}}
    <table class="ttd-table avoid-break">
        <tr>
            @foreach ($pihak as $index => $p)
                @if ($index < 2)
                    <td>
                        <p>Pihak {{ ['Pertama', 'Kedua'][$index] }}</p>
                        <div class="space-ttd"></div>
                        <p class="nama-ttd">{{ strtoupper($p['nama']) }}</p>
                    </td>
                @endif
            @endforeach
        </tr>
        {{-- @if (count($pihak) > 2)
            <tr>
                @foreach ($pihak as $index => $p)
                    @if ($index >= 2)
                        <td>
                            <p>Pihak {{ ['Ketiga', 'Keempat'][$index - 2] }}</p>
                            <div class="space-ttd"></div>
                            <p class="nama-ttd">{{ strtoupper($p['nama']) }}</p>
                        </td>
                    @endif
                @endforeach
                @if (count($pihak) == 3)
                    <td></td>
                @endif
            </tr>
        @endif --}}
    </table>

    <br>

    {{-- Bagian bawah: SAKSI (kiri) & MENGETAHUI (kanan) --}}
    <table class="footer-grid avoid-break">
        <tr>
            <td style="width:55%;">
                <p style="margin-bottom:2px;">SAKSI-SAKSI :</p>
                <table class="saksi-table">
                    @if (!empty($saksi))
                        @foreach ($saksi as $i => $s)
                            <tr>
                                <td style="width:22px;">{{ $i + 1 }}.</td>
                                <td>
                                    <div class="nama-ttd" style="text-decoration:none; font-weight:normal;">
                                        {{ strtoupper($s['nama'] ?? '  ') }} :
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="width:22px;">1.</td>
                            <td>
                                <div class="nama-ttd" style="text-decoration:none; font-weight:normal;">
                                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                <div class="nama-ttd" style="text-decoration:none; font-weight:normal;">
                                    (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                                </div>
                            </td>
                        </tr>
                    @endif
                </table>
            </td>
            <td style="width:45%; text-align:center;">
                <p>Mengetahui</p>
                <p>KA SPKT</p>
                <div class="space-ttd"></div>
                <p class="nama-ttd">{{ strtoupper($suratPernyataan->pejabat_mengetahui) }}</p>
            </td>
        </tr>
    </table>

</body>

</html>
