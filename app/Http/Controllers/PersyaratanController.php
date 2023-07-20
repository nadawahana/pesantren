<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersyaratanStoreRequest;
use App\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PersyaratanController extends Controller
{
    public function store(PersyaratanStoreRequest $request)
    {
        $user = auth()->user();

        $file_ijazah = $request->file('ijazah')->store('public/persyaratan');
        $file_kk = $request->file('KK')->store('public/persyaratan');
        $file_akta_kelahiran = $request->file('akta_kelahiran')->store('public/persyaratan');
        $file_smt1_kelas5 = null;
        $file_smt2_kelas5 = null;
        $file_smt1_kelas = null;
        $file_pas_foto = $request->file('pas_foto')->store('public/persyaratan');
        $file_kip = null;
        $file_penghargaan = null;

        if ($request->hasFile('smt1_kelas5')) {
            $file_smt1_kelas5 = $request->file('smt1_kelas5')->store('public/persyaratan');
        }

        if ($request->hasFile('KIP')) {
            $file_kip = $request->file('KIP')->store('public/persyaratan');
        }

        if ($request->hasFile('smt2_kelas5')) {
            $file_smt2_kelas5 = $request->file('smt2_kelas5')->store('public/persyaratan');
        }

        if ($request->hasFile('smt1_kelas')) {
            $file_smt1_kelas = $request->file('smt1_kelas')->store('public/persyaratan');
        }

        if ($request->hasFile('kip')) {
            $file_kip = $request->file('kip')->store('public/persyaratan');
        }

        if ($request->hasFile('penghargaan')) {
            $file_penghargaan = $request->file('penghargaan')->store('public/persyaratan');
        }

        Persyaratan::updateOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'KK' => basename($file_kk),
                'tingkat' => $request->tingkat,
                'penghargaan' => $file_penghargaan ? basename($file_penghargaan) : null,
                'ijazah' => basename($file_ijazah),
                'akta_kelahiran' => basename($file_akta_kelahiran),
                'pas_foto' => basename($file_pas_foto),
                'pas_foto' => basename($file_kip),
                'KIP' => $file_kip ? basename($file_kip) : null,
            ]
        );

        return redirect()->back()->with('message', 'Data berhasil disimpan');
    }
}
