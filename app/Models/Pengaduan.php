<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pelapor',
        'umur_pelapor',
        'pekerjaan_pelapor',
        'alamat_pelapor',
        'no_hp_pelapor',
        'isi_laporan',
        'latitude',
        'longitude',
        'tanggal_laporan',
        'status',
        'verified_by_admin_id',
        'assigned_to_reskrim_id',
    ];

    /**
     * Tipe data asli dari atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_laporan' => 'datetime',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    // RELASI: Mendefinisikan hubungan Pengaduan dengan tabel lain

    /**
     * Relasi ke STPL yang dimiliki oleh pengaduan ini.
     */
    public function stpl(): HasOne
    {
        return $this->hasOne(Stpl::class);
    }

    /**
     * Relasi ke User (Admin) yang memverifikasi pengaduan ini.
     */
    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by_admin_id');
    }

    /**
     * Relasi ke User (Reskrim) yang ditugaskan untuk pengaduan ini.
     */
    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to_reskrim_id');
    }
}
