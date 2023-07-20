<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiTotal extends Model
{
    protected $table = 'data_nilai';

    protected $fillable = ['user_id', 'baca_alquran', 'sholat', 'tahfidz', 'ujian_tulisan', 'status'];

    protected $with = ['santri'];

    public function santri()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
