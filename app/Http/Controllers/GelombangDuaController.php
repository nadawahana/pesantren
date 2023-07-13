<?php

namespace App\Http\Controllers;

use App\GelombangDua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GelombangDuaController extends Controller
{
    public function simpan(Request $request){
        $request->validate([
            'batas_waktu_pendaftaran' => 'required|string',
            'ujian_lisan' => 'required|string',
            'ujian_tulisan' => 'required|string',
            'pengumuman_hasil' => 'required|string',
            'daftar_ulang' => 'required|string', 
        ]);

        GelombangDua::create([
            'batas_waktu_pendaftaran' => $request->batas_waktu_pendaftaran,
            'ujian_lisan' => $request->ujian_lisan,
            'ujian_tulisan' => $request->ujian_tulisan,
            'pengumuman_hasil' => $request->pengumuman_hasil,
            'daftar_ulang' => $request->daftar_ulang
        ]);

        return redirect()->intended('daftar')->with('message', 'Anda Berhasil Input Data Ujian Gelombang 2');


    }

    public function getLastRecord()
        {
            $lastRecord = DB::table('gelombang2')->latest()->first();
            return response()->json(['data'=>$lastRecord],201);
        }
}
