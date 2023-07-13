<?php
namespace App\Http\Controllers;

use App\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PersyaratanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ijazah' => 'required',
            'KK' => 'required',
            'akta_kelahiran' => 'required',
            'smt1_kelas5' => 'sometimes|nullable',
            'smt2_kelas5' => 'sometimes|nullable',
            'KIP' => 'required',
            'smt1_kls6' => 'sometimes|nullable',
            'pas_foto' => 'required',
            'KIP' => 'sometimes|nullable',
            'tingkat' => 'nullable',
            'penghargaan' => 'sometimes|nullable',
            '1kls5_agama' => 'required|numeric',
            '2kls5_agama' => 'required|numeric',
            '1kls5_pkn' => 'required|numeric',
            '2kls5_pkn' => 'required|numeric',
            '1kls5_bIndo' => 'required|numeric',
            '2kls5_bIndo' => 'required|numeric',
            '1kls5_mtk' => 'required|numeric',
            '2kls5_mtk' => 'required|numeric',
            '1kls5_ipa' => 'required|numeric',
            '2kls5_ips' => 'required|numeric',
            '1kls5_senbud' => 'required|numeric',
            '2kls5_senbud' => 'required|numeric',
            '1kls5_penjas' => 'required|numeric',
            '2kls5_penjas' => 'required|numeric',
            '1kls5_rata2' => 'required|numeric',
            '1kls6_agama' => 'required|numeric',
            '1kls6_pkn' => 'required|numeric',
            '1kls6_bIndo' => 'required|numeric',
            '1kls6_mtk' => 'required|numeric',
            '1kls6_ipa' => 'required|numeric',
            '1kls6_ips' => 'required|numeric',
            '1kls6_senbud' => 'required|numeric',
            '1kls6_penjas' => 'required|numeric',
            '1kls6_rata2' => 'nullable|numeric',
        ]);

        $user = auth()->user();

        $file_ijazah = $request->file('ijazah')->store('public/persyaratan');
        $file_kk = $request->file('KK')->store('public/persyaratan');
        $file_akta_kelahiran = $request->file('akta_kelahiran')->store('public/persyaratan');
        $file_smt1_kelas5 = null;
        $file_smt2_kelas5 = null;
        $file_smt1_kls6 = null;
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

        if ($request->hasFile('smt1_kls6')) {
            $file_smt1_kls6 = $request->file('smt1_kls6')->store('public/persyaratan');
        }

        if ($request->hasFile('kip')) {
            $file_kip = $request->file('kip')->store('public/persyaratan');
        }

        if ($request->hasFile('penghargaan')) {
            $file_penghargaan = $request->file('penghargaan')->store('public/persyaratan');
        }

        Persyaratan::create([
            'smt1-kelas5' => $file_smt1_kelas5 ? basename($file_smt1_kelas5) : null,
            'smt2-kelas5' => $file_smt2_kelas5 ? basename($file_smt2_kelas5) : null,
            'smt1-kls6' => $file_smt1_kls6 ? basename($file_smt1_kls6) : null,
            'KK' => basename($file_kk),
            'tingkat' => $request->tingkat,
            'penghargaan' => $file_penghargaan ? basename($file_penghargaan) : null,
            'user_id' => $user->id,
            'ijazah' => basename($file_ijazah),
            'akta_kelahiran' => basename($file_akta_kelahiran),
            'pas_foto' => basename($file_pas_foto),
            'pas_foto' => basename($file_kip),
            'KIP' => $file_kip ? basename($file_kip) : null,
            '1kls5_agama' => $request->input('1kls5_agama'),
            '2kls5_agama' => $request->input('2kls5_agama'),
            '1kls5_pkn' => $request->input('1kls5_pkn'),
            '2kls5_pkn' => $request->input('2kls5_pkn'),
            '1kls5_bIndo' => $request->input('1kls5_bIndo'),
            '2kls5_bIndo' => $request->input('2kls5_bIndo'),
            '1kls5_mtk' => $request->input('1kls5_mtk'),
            '2kls5_mtk' => $request->input('2kls5_mtk'),
            '1kls5_ipa' => $request->input('1kls5_ipa'),
            '2kls5_ips' => $request->input('2kls5_ips'),
            '1kls5_senbud' => $request->input('1kls5_senbud'),
            '2kls5_senbud' => $request->input('2kls5_senbud'),
            '1kls5_penjas' => $request->input('1kls5_penjas'),
            '2kls5_penjas' => $request->input('2kls5_penjas'),
            '1kls5_rata2' => $request->input('1kls5_rata2'),
            '1kls6_agama' => $request->input('1kls6_agama'),
            '1kls6_pkn' => $request->input('1kls6_pkn'),
            '1kls6_bIndo' => $request->input('1kls6_bIndo'),
            '1kls6_mtk' => $request->input('1kls6_mtk'),
            '1kls6_ipa' => $request->input('1kls6_ipa'),
            '1kls6_ips' => $request->input('1kls6_ips'),
            '1kls6_senbud' => $request->input('1kls6_senbud'),
            '1kls6_penjas' => $request->input('1kls6_penjas'),
            '1kls6_rata2' => $request->input('1kls6_rata2'),
        ]);

        return redirect()->back()->with('message', 'Data stored successfully.');
    }

}