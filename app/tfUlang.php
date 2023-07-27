<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tfUlang extends Model
{
    protected $table = 'tf_ulang';

    protected $fillable = ['user_id', 'bukti_tf'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
