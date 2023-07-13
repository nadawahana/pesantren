<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function storeRegister(Request $request){
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'username' => 'required',
                'password' => 'required',
            ]);

            User::create([
                'name' => $request->name,
                'alamat' => $request->address,
                'no_hp' => $request->phone,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'level'=>'calon-santri'
            ]);

            return redirect('/login')->with('message', 'Anda Berhasil Registrasi, Silahkan Login');
        }
    }

