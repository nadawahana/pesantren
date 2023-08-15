<?php

namespace App\Http\Controllers;

use App\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiSantriController extends Controller
{
    //
    public function index()
    {
        $data = Notifikasi::with(['sender.datasantri'])
            ->where('penerima', auth()->user()->id)
            ->get();
        return view('santri.notifikasi.notifikasi', compact('data'));
    }

    public function gantiStatus(Notifikasi $notifikasi)
    {
        $notifikasi->update([
            'status' => 1
        ]);
        $notifikasi->save();
        return redirect()->route('pemberitahuan.index')->with('message', 'Pesan telah dibaca');
    }
}
