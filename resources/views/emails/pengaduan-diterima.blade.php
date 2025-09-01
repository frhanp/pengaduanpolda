<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Diterima</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
        <h2>Laporan Anda Telah Diterima</h2>
        <p>Halo, {{ $pengaduan->nama_pelapor }},</p>
        <p>Terima kasih telah membuat laporan. Laporan Anda telah kami terima dan akan segera ditindaklanjuti.</p>
        <p><strong>Nomor Tiket Laporan Anda: {{ $pengaduan->nomor_tiket }}</strong></p>
        <p>Silakan gunakan nama lengkap  untuk melacak status laporan Anda.</p>
        <hr>
        <p>Hormat kami,<br>Tim Polresta Gorontalo Kota</p>
    </div>
</body>
</html>