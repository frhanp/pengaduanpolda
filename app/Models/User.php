<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pengaduan;
use App\Models\Stpl;
use App\Enums\UserRole;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'unit_kerja',
    ];

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
            'role' => UserRole::class, // Ini bagian terpenting
        ];
    }

    // RELASI: Mendefinisikan hubungan User dengan tabel lain

    /**
     * Relasi ke pengaduan yang diverifikasi oleh user ini (sebagai admin).
     */
    public function verifiedPengaduans(): HasMany
    {
        return $this->hasMany(Pengaduan::class, 'verified_by_admin_id');
    }


    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'assigned_to_reskrim_id');
    }
    /**
     * Relasi ke pengaduan yang ditugaskan ke user ini (sebagai reskrim).
     */
    public function assignedPengaduans(): HasMany
    {
        return $this->hasMany(Pengaduan::class, 'assigned_to_reskrim_id');
    }

    /**
     * Relasi ke STPL yang dibuat oleh user ini (sebagai admin).
     */
    public function createdStpls(): HasMany
    {
        return $this->hasMany(Stpl::class, 'dibuat_oleh_admin_id');
    }
}
