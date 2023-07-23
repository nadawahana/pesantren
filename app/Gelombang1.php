<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Gelombang1 extends Model
{
    protected $table = 'gelombang1';

    protected $fillable = [
        'batas_waktu_pendaftaran',
        'ujian_lisan',
        'ujian_tulisan',
        'pengumuman_hasil',
        'daftar_ulang',
    ];
    protected $casts = [
        'batas_waktu_pendaftaran' => 'date',
        'ujian_lisan' => 'date',
        'ujian_tulisan' => 'date',
        'pengumuman_hasil' => 'date',
        'daftar_ulang' => 'date',
    ];
    // protected $dates = [
    //     'batas_waktu_pendaftaran',
    //     'ujian_lisan',
    //     'ujian_tulisan',
    //     'pengumuman_hasil',
    //     'daftar_ulang',
    // ];
}
