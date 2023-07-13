<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gelombang1;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class Gelombang2Controller extends Controller
{
    public function store(Request $request)
    {


        $request->validate([
            'batas_waktu_pendaftaran' => 'required|string',
            'ujian_lisan' => 'required|string',
            'ujian_tulisan' => 'required|string',
            'pengumuman_hasil' => 'required|string',
            'daftar_ulang' => 'required|string',
        ]);

        Gelombang1::create([
            'batas_waktu_pendaftaran' => $request->batas_waktu_pendaftaran,
            'ujian_lisan' => $request->ujian_lisan,
            'ujian_tulisan' => $request->ujian_tulisan,
            'pengumuman_hasil' => $request->pengumuman_hasil,
            'daftar_ulang' => $request->daftar_ulang
        ]);

        return redirect()->intended('daftar')->with('message', 'Anda Berhasil Input Data Ujian Gelombang 1');
    }
    public function getLastRecord()
    {
        $lastRecord = DB::table('gelombang1')->latest()->first();

        if ($lastRecord) {
            $dateColumns = ['batas_waktu_pendaftaran', 'ujian_lisan', 'ujian_tulisan', 'pengumuman_hasil', 'daftar_ulang'];

            foreach ($dateColumns as $column) {
                if (isset($lastRecord->$column)) {
                    $carbonDate = Carbon::createFromFormat('Y-m-d', $lastRecord->$column);
                    $lastRecord->$column = $carbonDate->format('F j, Y');
                }
            }
        }
        

        return response()->json(['data' => $lastRecord], 201);
    }
}
