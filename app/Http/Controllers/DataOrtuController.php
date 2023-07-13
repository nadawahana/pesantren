<?php

namespace App\Http\Controllers;

use App\DataOrtu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrtuController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'ket_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'ket_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat' => 'required',
        ]);

        $user2 = Auth::user();
        $validatedData['user_id'] = $user2->name;

        DataOrtu::create($validatedData);

        $message = 'Berhasil upload data persyaratan';
        return view('userdataortu',compact('message'));
    }

    public function get(){
        return view('userdataortu');
    }
}
