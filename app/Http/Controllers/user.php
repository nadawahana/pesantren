<?php

namespace App\Http\Controllers;

use App\DataSantri;
use App\NilaiTotal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function regis()
    {
        return view('regis');
    }
    public function inputdaftar()
    {
        // dd(Auth::check());
        return view('inputdaftar');
    }

    public function master()
    {
        return view('master');
    }
    public function daftar()
    {
        // dd(Auth::check());
        return view('pendaftaran');
    }
    public function userhome()
    {
        // dd(Auth::check());
        return view('userhome');
    }

    public function gelombang1()
    {
        // dd(Auth::check());
        return view('gelombang1');
    }

    public function gelombang2()
    {
        // dd(Auth::check());
        return view('gelombang2');
    }

    public function userdatadaftar()
    {
        $user = Auth::id();
        $datasantri = DataSantri::where('user_id', $user)->first();
        return view('userdatadaftar', compact('datasantri'));
    }
    public function persyaratan()
    {
        return view('persyaratan');
    }
    public function nomorujian()
    {
        return view('nomorujian');
    }
    public function buktitf()
    {
        return view('buktitf');
    }
    public function buktitfulang()
    {
        return view('buktitfulang');
    }
    public function userstatus()
    {
        return view('userstatus');
    }
    public function userstatus2()
    {
        return view('userstatus2');
    }
    public function hubungi()
    {
        return view('hubungi');
    }
    public function statusPembayaran()
    {
        return view('statusPembayaran');
    }
    public function kartuUjian()
    {
        return view('kartuUjian');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function get()
    {
        $dataNilaiTotal = NilaiTotal::all();
        return view('datanilai', compact('dataNilaiTotal'));
    }

    public function store(Request $request)
    {
        $nilaiTotal = new NilaiTotal();
        $nilaiTotal->nama_santri = $request->input('nama_santri');
        $nilaiTotal->baca_alquran_input = $request->input('baca_alquran_input');
        $nilaiTotal->sholat_input = $request->input('sholat_input');
        $nilaiTotal->tahfidz_input = $request->input('tahfidz_input');
        $nilaiTotal->ujian_tulisan_input = $request->input('ujian_tulisan_input');
        $nilaiTotal->save();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Input Nilai Total');
    }

    public function update(Request $request, $id)
    {
        $nilaiTotal = NilaiTotal::findOrFail($id);
        $nilaiTotal->nama_santri = $request->input('nama_santri');
        $nilaiTotal->baca_alquran_input = $request->input('baca_alquran_input');
        $nilaiTotal->sholat_input = $request->input('sholat_input');
        $nilaiTotal->tahfidz_input = $request->input('tahfidz_input');
        $nilaiTotal->ujian_tulisan_input = $request->input('ujian_tulisan_input');
        $nilaiTotal->status = $request->input('status');
        $nilaiTotal->save();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Update Data Nilai Total');
    }

    public function destroy($id)
    {
        $nilaiTotal = NilaiTotal::findOrFail($id);
        $nilaiTotal->delete();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Hapus Data Nilai Total');
    }
}
