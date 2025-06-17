<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stpl extends Model
{
    protected $fillable = ['laporan_id', 'nomor_surat', 'issued_at', 'status_kirim'];

    public function laporan(): BelongsTo
    {
        return $this->belongsTo(Laporan::class);
    }
}
