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
        }

        .isi-pernyataan li {
            margin: 3px 0;
            text-align: justify;
        }

        .penutup {
            margin-top: 10px;
            text-align: justify;
            text-indent: 36px;
        }

        /* ==== Tanda Tangan (2 pihak saja) ==== */
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

        /* ruang tanda tangan, dipadatkan */
        .nama-ttd {
            margin-top: 0;
            text-decoration: underline;
            font-weight: bold;
        }

        .materai {
            display: inline-block;
            width: 100px;
            height: 55px;
            border: 1px solid #999;
            line-height: 1.1;
            padding-top: 6px;
            font-size: 11pt;
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


        .clear {
            clear: both;
        }

        /* Hindari pecah blok penting */
        .avoid-break {
            page-break-inside: avoid;
        }

        * [ADD] Perapat jarak antar kolom TTD */ .ttd-table.avoid-break td {
            padding: 0 4px;
        }

        /* [ADD] Wrapper untuk posisi absolut materai */
        .ttd-wrap {
            position: relative;
        }

        /* [ADD] Materai overlap di tengah, menyentuh dua TTD */
        .materai-overlap {
            position: absolute;
            left: 50%;
            top: 28px;
            /* kira-kira di area tanda tangan (boleh disetel 22–34px) */
            transform: translateX(-50%);
            z-index: 2;
            text-align: center;
        }

        .ttd-tight {
            width: 65% !important;
            margin: 0 auto;
        }

        .ttd-tight td {
            width: 48%;
            padding: 0 4px;
        }

        /* override 50% & rapatkan padding */
    </style>
</head>

<body>
    @php
        $pihak = $suratPernyataan->pihak_terlibat ?? [];
        $pihakUtama = array_slice($pihak, 0, 2);
        $saksi = array_slice($pihak, 2); // sisanya jadi saksi
    @endphp

    <div class="judul text-center font-bold underline">SURAT PERNYATAAN</div>

    <div class="pembuka">
        <p>Yang bertanda tangan di bawah ini :</p>
    </div>

    {{-- Identitas SEMUA pihak (tetap ditampilkan) --}}
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
                <td class="value">{{ $ph['umur'] ?? ($ph['ttl'] ?? '-') }}</td>
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

    <div class="isi-pernyataan">
        @php
            $poin = preg_split("/\r\n|\n|\r/", trim((string) $suratPernyataan->isi_pernyataan));
            $poin = array_values(array_filter($poin, fn($x) => strlen(trim($x)) > 0));
        @endphp
        @if (count($poin))
            <ol>
                @foreach ($poin as $p)
                    <li>{!! nl2br(e($p)) !!}</li>
                @endforeach
            </ol>
        @else
            <p>{{ $suratPernyataan->isi_pernyataan }}</p>
        @endif
    </div>

    <div class="penutup">
        <p>Demikian surat pernyataan kami buat dengan sebenarnya tanpa ada paksaan dari pihak manapun juga melainkan
            dari diri sendiri dan apabila Saya (Pihak Pertama) melanggar pernyataan ini maka Saya siap diproses sesuai
            hukum yang berlaku.</p>
    </div>

    <p class="text-center" style="margin-top: 10px;">
        {{ $suratPernyataan->tempat_dibuat }}, {{ $suratPernyataan->created_at->translatedFormat('d F Y') }}
    </p>
    <p class="text-center">Yang membuat pernyataan</p>

    {{-- TTD: HANYA PIHAK 1 & 2 --}}
    <div class="ttd-wrap"> {{-- [ADD] --}}
        <table class="ttd-table avoid-break ttd-tight">
            <tr>
                <td>
                    <p>Pihak Pertama</p>
                    <div class="space-ttd"></div>
                    <p class="nama-ttd">{{ strtoupper($pihakUtama[0]['nama'] ?? '....................') }}</p>
                </td>
                <td>
                    <p>Pihak Kedua</p>
                    <div class="space-ttd"></div>
                    <p class="nama-ttd">{{ strtoupper($pihakUtama[1]['nama'] ?? '....................') }}</p>
                </td>
            </tr>
        </table>

    </div> {{-- [/ADD] --}}
    <br>

    {{-- Bagian bawah: SAKSI (kiri) & MENGETAHUI (kanan) --}}
    <table class="footer-grid avoid-break">
        <tr>
            <td style="width:55%;">
                <p style="margin-bottom:2px;">SAKSI-SAKSI :</p>
                <table class="saksi-table">
                    @if (count($saksi))
                        @foreach ($saksi as $i => $s)
                            <tr>
                                <td style="width:22px;">{{ $i + 1 }}.</td>
                                <td>

                                    <div class="nama-ttd" style="text-decoration:none; font-weight:normal;">
                                        ({{ strtoupper($s['nama'] ?? '') }})
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
                <p class="nama-ttd">{{ strtoupper($suratPernyataan->pejabat_mengetahui ?? 'DONI FERI SETIAWAN SH') }}
                </p>
            </td>
        </tr>
    </table>

    <div class="clear"></div>
</body>

</html>
