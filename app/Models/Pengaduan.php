<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengaduan extends Model
{
    protected $fillable = ['masyarakat_id', 'title', 'description', 'location', 'status'];

    public function masyarakat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'masyarakat_id');
    }
  
    public function laporan(): HasOne
    {
        return $this->hasOne(Laporan::class);
    }
}
