<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use App\DataOrtu;
use App\DataSantri;
use App\Gelombang1;
use App\NilaiTotal;
use App\Persyaratan;
use App\GelombangDua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DataNilaiSantriStoreRequest;
use App\Http\Requests\DataNilaiSantriUpdateRequest;

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

    public function informasiPendaftaran()
    {
        // dd(Auth::check());
        $gelombang1 = Gelombang1::first();
        $gelombang2 = GelombangDua::first();
        return view('informasi-pendaftran', compact('gelombang1', 'gelombang2'));
    }
    public function gelombang1()
    {
        $gelombang1 = Gelombang1::first();
        return view('gelombang1', compact('gelombang1'));
    }

    public function gelombang2()
    {
        // dd(Auth::check());
        return view('gelombang2');
    }

    public function userdatadaftar()
    {
        $status = $this->status_pembayaran();
        $user = Auth::id();
        $datasantri = DataSantri::where('user_id', $user)->first();
        return view('userdatadaftar', compact('datasantri', 'status'));
    }
    public function persyaratan()
    {
        $status = $this->status_pembayaran();
        $user = Auth::id();
        $datapersyaratan = Persyaratan::where('user_id', $user)->first();
        return view('persyaratan', compact('datapersyaratan', 'status'));
    }
    public function nomorujian()
    {
        return view('nomorujian');
    }
    public function buktitf()
    {
        $user = Auth::id();
        $databukti = BuktiTF::where('user_id', $user)->first();
        return view('buktitf', compact('databukti'));
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
        $dataNilaiTotal = NilaiTotal::query();
        $data = $dataNilaiTotal->without('santri')->select('user_id')->get()->toArray();
        $datasantri = DataSantri::with('user')->whereNotIn('user_id', $data)->get()->pluck('nama_lengkap', 'user_id');
        $dataNilaiTotal = NilaiTotal::with('santri.datasantri')->get();
        return view('datanilai', compact('dataNilaiTotal', 'datasantri', 'data'));
    }

    public function store(DataNilaiSantriStoreRequest $request)
    {
        $nilaiTotal = new NilaiTotal();
        $nilaiTotal->user_id = $request->input('nama_santri');
        $nilaiTotal->baca_alquran = $request->input('baca_alquran');
        $nilaiTotal->sholat = $request->input('sholat');
        $nilaiTotal->tahfidz = $request->input('tahfidz');
        $nilaiTotal->ujian_tulisan = $request->input('ujian_tulisan');
        $nilaiTotal->save();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Input Nilai Total');
    }

    public function update(DataNilaiSantriUpdateRequest $request, $id)
    {
        $nilaiTotal = NilaiTotal::findOrFail($id);
        $nilaiTotal->user_id = $request->input('nama_santri');
        $nilaiTotal->baca_alquran = $request->input('baca_alquran');
        $nilaiTotal->sholat = $request->input('sholat');
        $nilaiTotal->tahfidz = $request->input('tahfidz');
        $nilaiTotal->ujian_tulisan = $request->input('ujian_tulisan');
        $nilaiTotal->save();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Update Data Nilai Total');
    }

    public function destroy($id)
    {
        $nilaiTotal = NilaiTotal::findOrFail($id);
        $nilaiTotal->delete();

        return redirect()->route('nilai-total.index')->with('message', 'Anda Berhasil Hapus Data Nilai Total');
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
