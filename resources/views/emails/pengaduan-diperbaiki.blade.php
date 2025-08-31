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
        <p>Terima kasih telah mengirimkan perbaikan untuk laporan Anda dengan nomor tiket <strong>{{ $pengaduan->nomor_tiket }}</strong>.</p>
        <p>Laporan Anda kini telah berstatus "Baru" dan akan kembali ditinjau oleh admin kami.</p>
        <hr>
        <p>Hormat kami,<br>Tim PoldaCare</p>
    </div>
</body>
</html>