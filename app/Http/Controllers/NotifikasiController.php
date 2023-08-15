<?php

namespace App\Http\Controllers;

use App\DataSantri;
use App\Notifikasi;
use App\User;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notifikasi::with(['receiver.datasantri'])->get();
        return view('admin.notifikasi.notifikasi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datasantri = DataSantri::with('user')->get();
        return view('admin.notifikasi.notifikasi-create', compact('datasantri'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_santri' => 'required|exists:' . User::class . ',id',
            'pesan' => 'required|string',
        ], [
            'pesan.required' => 'Pesan harus diisi',
            'pesan.string' => 'Pesan harus berupa string',
            'nama_santri.required' => 'Wajib memilih santri',
            'nama_santri.exists' => 'Data santri tidak ada di dalam sistem',
        ]);

        $notifikasi = Notifikasi::create(
            [
                'penerima' => $validateData['nama_santri'],
                'pengirim' => auth()->user()->id,
                'pesan' => $validateData['pesan']
            ]
        );

        return redirect()->route('notifikasi.index')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifikasi $notifikasi)
    {
        $notifikasi->delete();
        return redirect()->route('notifikasi.index')->with('message', 'Data diri berhasil dihapus');
    }
}
