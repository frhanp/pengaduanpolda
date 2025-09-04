<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuratPernyataan extends Model
{
    use HasFactory;

    protected $table = 'surat_pernyataans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pengaduan_id',
        'dibuat_oleh_reskrim_id',
        'pihak_terlibat', // Kolom baru untuk data JSON
        'isi_pernyataan', // Kolom baru untuk isi pernyataan
        'tempat_dibuat',  // Kolom baru untuk tempat dibuat
        'pejabat_mengetahui', // Kolom baru untuk pejabat mengetahui
        'saksi_terlibat', // Kolom baru untuk data JSON
    ];

    protected $casts = [
        'pihak_terlibat' => 'array', // Ini akan otomatis mengubah JSON dari DB menjadi array PHP
        'saksi_terlibat' => 'array', // Ini akan otomatis mengubah JSON dari DB menjadi array PHP
        'pejabat_mengetahui' => 'string', // Ini akan otomatis mengubah JSON dari DB menjadi string PHP
    ];

    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function uploader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dibuat_oleh_reskrim_id');
    }
}
