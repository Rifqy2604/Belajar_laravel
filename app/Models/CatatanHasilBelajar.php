<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanHasilBelajar extends Model
{
    use HasFactory;

    protected $table = "catatan_hasil_belajar";

    protected $fillable = [
        'hari',
        'tanggal',
        'waktu',
        'materi',
        'ringkasan',
        'kesuliran',
        'link_referensi',
        'rencana_selanjutnya',
    ];
}
