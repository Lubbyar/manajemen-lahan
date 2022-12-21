<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Posisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pinjam',
        'garis_lintang',
        'garis_bujur',
        'mdpl',
        'lahan_id',
        'validasi',
        'authorisasi'
    ];

    protected $with = ['lahan'];

    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class);
    }
}
