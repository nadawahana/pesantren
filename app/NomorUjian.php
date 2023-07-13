<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomorUjian extends Model
{
    protected $table = 'nomor_ujian';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jenkel',
        'asal_sekolah',
        'jalur_masuk'
    ];
}
