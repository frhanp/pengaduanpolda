<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\RiwayatStatus;
use Illuminate\Support\Str;

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
        'nik',
        'foto_ktp',
        'isi_laporan',
        'tujuan_polsek',
        'latitude',
        'longitude',
        'tanggal_laporan',
        'status',
        'verified_by_admin_id',
        'assigned_to_reskrim_id',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'catatan_pengembalian',
        'email_pelapor',
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
        'tanggal_lahir' => 'date',
    ];

    // ---- TAMBAHKAN BLOK boot() DI BAWAH INI ----
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($pengaduan) {
            // Membuat hash unik saat data pertama kali dibuat
            do {
                $hash = strtoupper(Str::random(6));
            } while (self::where('ticket_hash', $hash)->exists());

            $pengaduan->ticket_hash = $hash;
        });
    }

    protected function nomorTiket(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            // Ganti formatnya menjadi: PGK-HASH-ID
            get: fn () => 'PGK-' . $this->ticket_hash . '-' . str_pad($this->id, 4, '0', STR_PAD_LEFT),
        );
    }


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

    public function suratPernyataans(): HasMany
    {
        return $this->hasMany(SuratPernyataan::class);
    }

    public function bukti()
    {
        return $this->hasMany(BuktiPengaduan::class);
    }

    public function riwayatStatus()
    {
        return $this->hasMany(RiwayatStatus::class)->orderBy('created_at', 'desc');
    }


}
