<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stpl extends Model
{
    use HasFactory;

    /**
     * Nama tabel kustom jika tidak mengikuti konvensi plural.
     * Kita definisikan untuk kejelasan, meskipun 'stpls' sudah benar.
     * @var string
     */
    protected $table = 'stpl';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pengaduan_id',
        'nomor_stpl',
        'tanggal_dibuat',
        'dibuat_oleh_admin_id',
        'tindak_pidana',
        'pasal_dilanggar',
        'hari_kejadian',
        'tanggal_kejadian',
        'tempat_kejadian',
        'uraian_kejadian',
        'terlapor',
        'nama_penerima',
        'nrp_penerima',
    ];

    /**
     * Tipe data asli dari atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_dibuat' => 'date',
        'tanggal_kejadian' => 'date',
    ];

    // RELASI: Mendefinisikan hubungan STPL dengan tabel lain

    /**
     * Relasi ke Pengaduan yang memiliki STPL ini.
     */
    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    /**
     * Relasi ke User (Admin) yang membuat STPL ini.
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh_admin_id');
    }

    /**
     * [FUNGSI BARU]
     * Membuat nomor STPL unik secara otomatis.
     * Format: STPL/TAHUN/BULAN/NOMOR_URUT
     */
    public static function generateStplNumber(): string
    {
        $year = date('Y');
        $month = date('m');

        // Hitung berapa banyak STPL yang sudah ada di bulan dan tahun ini
        $count = self::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();

        // Nomor urut berikutnya (ditambah 1)
        $nextNumber = $count + 1;

        // Format nomor urut menjadi 4 digit dengan angka 0 di depan (e.g., 0001, 0012)
        $formattedNumber = str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        return "STPL-{$year}-{$month}-{$formattedNumber}";
    }
}
