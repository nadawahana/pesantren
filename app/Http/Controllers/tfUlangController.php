<?php

namespace App\Http\Controllers;

use App\tfUlang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class tfUlangController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'buktiTf'=>'required|file'
        ]);

        $buktiTf = $request->buktiTf->store('public/buktiTfUlang');
        $user2 = Auth::id();

        tfUlang::create([
            'user_id'=>$user2,
            'bukti_tf'=>basename($buktiTf)
        ]);

        return redirect()->back()->with('message', 'Anda Berhasil Input Bukti Pembayaran Ulang');
    }
}
