<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuktiPengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengaduan_id',
        'file_path',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
