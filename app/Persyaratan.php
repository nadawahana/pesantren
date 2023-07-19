<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    protected $table = 'persyaratan';

    protected $fillable = [
        'smt2-kls5',
        'smt1-kls6',
        'KK',
        'tingkat',
        'penghargaan',
        'user_id',
        'ijazah',
        'akta_kelahiran',
        'pas_foto',
        'KIP',
        '1kls5_agama',
        '1kls5_pkn',
        '1kls5_bIndo',
        '1kls5_mtk',
        '1kls5_ipa',
        '1kls5_ips',
        '1kls5_senbud',
        '1kls5_penjas',
        '1kls5_rata2',
        '2kls5_agama',
        '2kls5_pkn',
        '2kls5_bIndo',
        '2kls5_mtk',
        '2kls5_ipa',
        '2kls5_ips',
        '2kls5_senbud',
        '2kls5_penjas',
        '2kls5_rata2',
        '1kls6_agama',
        '1kls6_pkn',
        '1kls6_bIndo',
        '1kls6_mtk',
        '1kls6_ipa',
        '1kls6_ips',
        '1kls6_senbud',
        '1kls6_penjas',
        '1kls6_rata2',
    ];

    public function santri()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
