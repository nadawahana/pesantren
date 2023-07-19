<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiTF extends Model
{
    protected $table = 'bukti_tf';

    protected $fillable = [
        'user_id',
        'bukti_tf',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
