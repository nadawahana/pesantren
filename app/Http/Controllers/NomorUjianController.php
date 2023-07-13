<?php

namespace App\Http\Controllers;

use App\NomorUjian;
use Illuminate\Http\Request;

class NomorUjianController extends Controller
{
   public function store(Request $request){
    $request->validate([
        'nama_lengkap'=>'required',
        'nisn'=>'required',
        'tempat_lahir'=>'required',
        'tanggal_lahir'=>'required',
        'jenkel'=>'required',
        'asal_sekolah'=>'required',
        'jalur_masuk'=>'required'
    ]);

    $user = auth()->user();

    NomorUjian::create([
        'user_id'=>$user->id,
        'nama_lengkap'=>$request->nama_lengkap,
        'nisn'=>$request->nisn,
        'tempat_lahir'=>$request->tempat_lahir,
        'tanggal_lahir'=>$request->tanggal_lahir,
        'jenkel'=>$request->jenkel,
        'asal_sekolah'=>$request->asal_sekolah,
        'jalur_masuk'=>$request->jalur_masuk
    ]);
    return redirect()->back()->with('message', 'Anda Berhasil Input Data Nomor Ujian');
}
}
