<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use App\DataOrtu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Santri\DataOrangTuaRequest;

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
        $status = $this->status_pembayaran();
        $user = Auth::id();
        $dataortu = DataOrtu::where('user_id', $user)->first();
        return view('userdataortu', compact('dataortu', 'status'));
    }

    function status_pembayaran()
    {
        $user = Auth::id();
        $status = BuktiTF::where('user_id', $user)->first();
        if (isset($status)) {
            if ($status->status == 1) return 1;
        } else {
            return 0;
        }
    }
}
