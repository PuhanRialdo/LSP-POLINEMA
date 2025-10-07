<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'kategori_id',
        'judul',
        'tanggal_arsip',
        'file'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
