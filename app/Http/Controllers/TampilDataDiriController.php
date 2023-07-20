<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSantri;

class TampilDataDiriController extends Controller
{
    public function index()
    {
        $data = DataSantri::all();
        return view('admindaftar', compact('data'));
    }
}
