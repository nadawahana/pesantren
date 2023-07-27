<?php

namespace App\Http\Controllers;

use App\tfUlang;
use Illuminate\Http\Request;

class DaftarUlangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTransfer = tfUlang::all();
        return view('datadaftarulang', compact('dataTransfer'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buktiTf = tfUlang::findOrFail($id);
        $buktiTf->status = $request->input('status');
        $buktiTf->save();

        return redirect()->route('data-daftar-ulang.index')->with('message', 'Anda Berhasil Melakukan Perubahan Status Data Daftar Ulang');
    }
}
