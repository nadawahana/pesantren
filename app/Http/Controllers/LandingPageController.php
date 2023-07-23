<?php

namespace App\Http\Controllers;

use App\DataSantri;
use Carbon\Carbon;
use App\Gelombang1;
use App\GelombangDua;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // return $this->test();
        $gelombang1 = $this->gelombang1();

        $gelombang2 = $this->gelombang2();
        $test = trim(str_replace(['\\'], '', json_encode($this->test()->getContent())), '"');
        $asalsekolah = trim(str_replace(['\\'], '', json_encode($this->asalSekolah()->getContent())), '"');
        $gender = trim(str_replace(['\\'], '', json_encode($this->gender()->getContent())), '"');
        return view('landingPage', compact('gelombang1', 'gelombang2', 'test', 'asalsekolah', 'gender'));
    }

    function gelombang1()
    {
        $gelombang1 = Gelombang1::select('batas_waktu_pendaftaran', 'ujian_lisan', 'ujian_tulisan', 'pengumuman_hasil', 'daftar_ulang')->latest()->first();
        if ($gelombang1 != null) {
            $gelombang1->batas_daftar_ulang = $gelombang1->daftar_ulang;
            $gelombang1 = collect($gelombang1);
            $gelombang1 = $gelombang1->map(function ($value, $key) {
                $result = null;
                // Carbon::parse("2021-12-23T07:42:42.393Z")->
                if ($key == 'batas_daftar_ulang') {
                    $result = Carbon::parse($value)->clone()->addDays(7);
                } else {
                    $result = Carbon::parse($value);
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

    function test()
    {
        $asal_sekolah = DataSantri::without('user')->select('jalur_masuk', DB::raw('count(*) as total'))
            ->whereYear('created_at', now()->format('Y'))
            ->groupby('jalur_masuk')
            ->get();
        return response()->json($asal_sekolah);
    }

    function asalSekolah()
    {
        $asal_sekolah = DataSantri::without('user')->select('asal_sekolah', DB::raw('count(*) as total'))
            ->whereYear('created_at', now()->format('Y'))
            ->groupby('asal_sekolah')
            ->get();
        return response()->json($asal_sekolah);
    }
    function gender()
    {
        $asal_sekolah = DataSantri::without('user')->select('jenkel', DB::raw('count(*) as total'))
            ->whereYear('created_at', now()->format('Y'))
            ->groupby('jenkel')
            ->get();
        return response()->json($asal_sekolah);
    }
}
