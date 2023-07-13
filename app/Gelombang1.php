<?php

namespace App;

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
}
