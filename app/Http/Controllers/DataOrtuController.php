<?php

namespace App\Http\Controllers;

use App\DataOrtu;
use App\Http\Requests\Santri\DataOrangTuaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrtuController extends Controller
{
    public function store(DataOrangTuaRequest $request)
    {
        $validatedData = $request->all();
        $user2 = Auth::id();
        $validatedData['user_id'] = $user2;

        DataOrtu::create($validatedData);

        $message = 'Berhasil upload data persyaratan';
        return view('userdataortu', compact('message'));
    }

    public function get()
    {
        return view('userdataortu');
    }
}
