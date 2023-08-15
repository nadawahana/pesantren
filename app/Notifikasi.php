<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasis';

    protected $fillable = ['pengirim', 'penerima', 'pesan', 'status'];

    public function sender()
    {
        return $this->belongsTo('App\User', 'pengirim', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\User', 'penerima', 'id');
    }
}
