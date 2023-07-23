<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Gelombang1;
use App\GelombangDua;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $gelombang1 = $this->gelombang1();
        $gelombang2 = $this->gelombang2();
        return view('landingPage', compact('gelombang1', 'gelombang2'));
    }

    function gelombang1()
    {
        $gelombang1 = Gelombang1::select('batas_waktu_pendaftaran', 'ujian_lisan', 'ujian_tulisan', 'pengumuman_hasil', 'daftar_ulang')->latest()->first();
        if ($gelombang1 != null) {
            $gelombang1->batas_daftar_ulang = $gelombang1->daftar_ulang;
            $gelombang1 = collect($gelombang1);
            $gelombang1 = $gelombang1->map(function ($value, $key) {
                $result = null;
                if ($key == 'batas_daftar_ulang') {
                    $result = Carbon::createFromFormat('Y-m-d', $value)->clone()->addDays(7);
                } else {
                    $result = Carbon::createFromFormat('Y-m-d', $value);
                }
                return $result->isoFormat('dddd, D MMMM Y');
            });
            $gelombang1->toArray();
            return $gelombang1;
        }
    }

    function gelombang2()
    {
        $gelombang2 = GelombangDua::select('batas_waktu_pendaftaran', 'ujian_lisan', 'ujian_tulisan', 'pengumuman_hasil', 'daftar_ulang')->latest()->first();
        if ($gelombang2 != null) {
            $gelombang2->batas_daftar_ulang = $gelombang2->daftar_ulang;
            $gelombang2 = collect($gelombang2);
            $gelombang2 = $gelombang2->map(function ($value, $key) {
                $result = null;
                if ($key == 'batas_daftar_ulang') {
                    $result = Carbon::createFromFormat('Y-m-d', $value)->clone()->addDays(7);
                } else {
                    $result = Carbon::createFromFormat('Y-m-d', $value);
                }
                return $result->isoFormat('dddd, D MMMM Y');
            });
            $gelombang2->toArray();
            return $gelombang2;
        }
    }
}
