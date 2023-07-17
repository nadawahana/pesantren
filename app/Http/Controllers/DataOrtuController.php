<?php

namespace App\Http\Controllers;

use App\DataOrtu;
use App\Http\Requests\Santri\DataOrangTuaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrtuController extends Controller
{
    public function store(DataOrangTuaRequest $request)
    {
        $user = Auth::id();

        DataOrtu::updateOrCreate(
            [
                'user_id' => $user
            ],
            [
                'nama_ayah' => $request->nama_ayah,
                'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
                'ket_ayah' => $request->ket_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'nama_ibu' => $request->nama_ibu,
                'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
                'ket_ibu' => $request->ket_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
                'alamat' => $request->alamat,

            ]
        );

        return redirect()->route('data-ortu')->with('message', 'Data diri berhasil perbarui');
    }

    public function get()
    {
        $user = Auth::id();
        $dataortu = DataOrtu::where('user_id', $user)->first();
        return view('userdataortu', compact('dataortu'));
    }
}
