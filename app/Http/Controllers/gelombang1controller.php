<?php

namespace App\Http\Controllers;

use App\Gelombang1;

class gelombang1controller extends Controller
{
    public function simpan()
    {

        $gelombang1 = Gelombang1::all();
        return response()->json($gelombang1);
    }
}
