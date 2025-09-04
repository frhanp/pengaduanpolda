<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perbaikan Laporan Terkirim</title>
</head>

<body style="font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Perbaikan Laporan Anda Telah Terkirim</h2>
        <p>Halo, {{ $pengaduan->nama_pelapor }},</p>
        <p>Terima kasih telah mengirimkan perbaikan untuk laporan Anda dengan nomor tiket
            <strong>{{ $pengaduan->nomor_tiket }}</strong>.
        </p>
        <p>Laporan Anda kini telah berstatus "Baru" dan akan kembali ditinjau oleh admin kami.</p>
        <p style="font-size: 14px; color: #555;">Gunakan nomor tiket ini untuk melacak status aduan Anda di website kami.
        </p>

        <p style="margin-top: 20px;">
            Anda dapat melacak status laporan Anda kapan saja melalui tautan di bawah ini:
        </p>
        <a href="{{ route('lacak.aduan', ['keyword' => $pengaduan->nomor_tiket]) }}"
            style="display: inline-block; padding: 10px 15px; background-color: #007bff; color: #ffffff; text-decoration: none; border-radius: 5px;">
            Lacak Laporan Saya
        </a>

        <hr>
        <p>Hormat kami,<br>Tim Polresta Gorontalo Kota</p>
    </div>
</body>

</html>
