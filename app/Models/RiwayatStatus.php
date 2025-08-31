<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatStatus extends Model
{
    use HasFactory;
    protected $table = 'riwayat_status';
    protected $fillable = ['pengaduan_id', 'status', 'catatan', 'updated_by'];

    public function pengaduan() {
        return $this->belongsTo(Pengaduan::class);
    }
    public function user() {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
