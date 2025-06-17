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
    ];

    /**
     * Tipe data asli dari atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_dibuat' => 'date',
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
    }//
}
