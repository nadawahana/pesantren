<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataOrtu extends Model
{
    protected $table = 'data_ortu';

    protected $fillable = [
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'ket_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'ket_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'alamat',
        'user_id'
    ];

    protected $with = ['santri'];

    public function santri()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
