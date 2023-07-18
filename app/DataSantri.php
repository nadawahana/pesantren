<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSantri extends Model
{
    protected $table = 'data_diri';

    protected $fillable = [
        'nama_lengkap',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jenkel',
        'asal_sekolah',
        'jalur_masuk',
        'hp_ayah',
        'file_name',
        'user_id'
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
