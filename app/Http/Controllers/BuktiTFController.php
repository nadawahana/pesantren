<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class BuktiTFController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'bukti_tf' => 'required|file|mimes:png,jpg,pdf',

        ]);
        $filename = $request->bukti_tf->store('public/Pembayaran');
        $fileUrl = Storage::url($filename);
        $user = auth()->user();

        BuktiTF::updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'bukti_tf' => basename($fileUrl),
                'status' => 0
            ]
        );
        return redirect()->intended('buktitf')->with('message', 'Anda Sudah Berhasil Melakukan Pembayaran');
    }
}
