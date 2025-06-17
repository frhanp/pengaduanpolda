<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pengaduan;
use App\Models\Laporan;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'email', 'phone', 'address', 'role', 'password'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Pengaduan yang dibuat masyarakat
    public function pengaduan(): HasMany
    {
        return $this->hasMany(Pengaduan::class, 'masyarakat_id');
    }
  
    // Laporan yang diterima sebagai admin
    public function laporanSebagaiAdmin(): HasMany
    {
        return $this->hasMany(Laporan::class, 'admin_id');
    }
  
    // Laporan yang diterima sebagai reskrim
    public function laporanSebagaiReskrim(): HasMany
    {
        return $this->hasMany(Laporan::class, 'reskrim_id');
    }
}
