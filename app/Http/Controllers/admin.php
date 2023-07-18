<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use App\DataOrtu;
use App\DataSantri;
use App\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::daftar;


    public function index()
    {
        // dd(Auth::check());
        return view('login');
    }
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();

            if (Auth::user()->level == 'admin') {
                return redirect()->intended('daftar')->with('message', 'Anda Berhasil Daftar Silahkan Login! ');
            } elseif (Auth::user()->level == 'calon-santri') {
                return redirect()->intended('inputdaftar')->with('message', 'Anda Berhasil Daftar Silahkan Login!');
            }
        }

        return back()->withErrors([
            'email' => 'Gaada di database bos data nya',
        ]);
    }

    public function regis(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $password = Hash::make($request->password);

        User::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $password,
            'level' => 'calon-santri'
        ]);

        return redirect('login')->with('message', 'berhasil register, silahkan login');
    }

    public function regis2()
    {
        // dd(Auth::check());
        return view('regis');
    }

    public function masteradmin()
    {
        return view('masteradmin');
    }
    public function daftar()
    {
        //  dd(auth()->check());
        return view('pendaftaran');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function admindaftar()
    {
        return view('admindaftar');
    }
    public function tampilPersyaratan()
    {
        $data = Persyaratan::paginate(10);
        return view('tampilPersyaratan', compact('data'));
    }
    public function tampilOrtu()
    {
        $data = DataOrtu::with('santri.datasantri')->get();
        return view('tampilOrtu', compact('data'));
    }
    public function datanilai()
    {
        return view('datanilai');
    }

    public function datapembayaran()
    {
        $dataNilaiTotal = BuktiTF::all();
        return view('datapembayaran', compact('dataNilaiTotal'));
    }

    public function update(Request $request, $id)
    {
        $nilaiTotal = BuktiTF::findOrFail($id);
        $nilaiTotal->user_id = $request->input('nama_santri');
        $nilaiTotal->status = $request->input('baca_alquran_input');
        $nilaiTotal->save();

        return redirect()->route('datapembayaran')->with('message', 'Anda Berhasil Melakukan Update Data Bukti Pembayaran');
    }

    public function destroy($id)
    {
        $nilaiTotal = BuktiTF::findOrFail($id);
        $nilaiTotal->delete();

        return redirect()->route('datapembayaran')->with('message', 'Anda Berhasil Melakukan Delete Data Bukti Pembayaran');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
