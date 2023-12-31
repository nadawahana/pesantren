<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'alamat', 'no_hp', 'username', 'level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';


    public function datasantri()
    {
        return $this->hasOne(DataSantri::class, 'user_id', 'id');
    }
    public function dataBuktiTransfer()
    {
        return $this->hasOne(BuktiTF::class, 'user_id', 'id');
    }
    public function dataPersyaratan()
    {
        return $this->hasOne(Persyaratan::class, 'user_id', 'id');
    }
    public function dataNilai()
    {
        return $this->hasOne(NilaiTotal::class, 'user_id', 'id');
    }
    public function dataDaftarUlang()
    {
        return $this->hasOne(tfUlang::class, 'user_id', 'id');
    }
}
