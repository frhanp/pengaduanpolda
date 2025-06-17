<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Laporan extends Model
{
    protected $fillable = ['pengaduan_id', 'admin_id', 'reskrim_id', 'submission_at'];

    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }
  
    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
  
    public function reskrim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reskrim_id');
    }
  
    public function stpl(): HasOne
    {
        return $this->hasOne(Stpl::class);
    }
}
