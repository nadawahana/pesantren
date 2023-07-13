<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiTotal extends Model
{
    protected $table = 'data_nilai';

    protected $fillable = ['nama_santri', 'baca_alquran_input', 'sholat_input', 'tahfidz_input', 'ujian_tulisan_input','status'];

}
