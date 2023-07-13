<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use Illuminate\Http\Request;
use App\DataSantri;
use App\Http\Requests\Santri\DataCalonSantriRequest;
use App\NilaiTotal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

class DataDiriController extends Controller
{
    public function uploadDataDiri(DataCalonSantriRequest $request)
    {
        $filename = $request->file_name->store('public/files');
        $fileUrl = Storage::url($filename);
        $user = Auth::id();

        DataSantri::updateOrCreate(
            [
                'user_id' => $user
            ],
            [
                'nama_lengkap' => $request->nama_lengkap,
                'nisn' => $request->nisn,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenkel' => $request->jenkel,
                'asal_sekolah' => $request->asal_sekolah,
                'jalur_masuk' => $request->jalur_masuk,
                'hp_ayah' => $request->hp_ayah,
                'file_name' => basename($filename),

            ]
        );

        $message = 'Berhasil upload data santri';
        return redirect()->route('inputdaftar')->with('message', 'Data diri berhasil perbarui');
        // return view('userdatadaftar', compact('message'));
        // return response()->json(['message'=>'berhasil upload data santri','data'=>'cek ajalah di database'],201);
    }

    public function TampilDataDiri()
    {
        $data = DataSantri::all()->paginate(5);

        return view('admindaftar', compact('data'));
        // return response()->json(['data'=>$data],201);
    }

    public function exportToPDF()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Get the data for the logged-in user
        $data = DataSantri::where('user_id', 'admin2')->get();

        // Generate the PDF view
        $pdf = new Dompdf();
        $pdf->loadHtml(View::make('pdf.dataSantri', ['data' => $data])->render());
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();

        // Output the generated PDF to the browser
        $pdf->stream('nomor_ujian.pdf');
    }

    public function checkPaymentProof()
    {
        $user = Auth::id();
        $paymentProof = BuktiTF::where('user_id', $user)->first();
        if ($paymentProof) {
            // User has submitted the payment proof
            $data = DataSantri::all();
            return redirect()->route('export-pdf', compact('data'));
        } else {
            // User has not submitted the payment proof
            return redirect()->back()->with('message', 'Untuk Mencetak Kartu Ujian Anda Harus Membayar Terlebih Dahulu!.');
        }
    }

    public function statusKelulusan()
    {
        $user = Auth::user();
        $paymentProof = NilaiTotal::where('nama_santri', $user->name)->first();

        if ($paymentProof) {
            // User has submitted the payment proof
            $status = $paymentProof->status; // Assuming the "status" field is available in the "data nilai total" table
            if ($status == 'lulus') {
                return redirect()->route('userstatus'); // Redirect to the route to export PDF for users who passed the exam
            } else {
                return redirect()->route('userstatus2'); // Redirect to the route to export PDF for users who passed the exam
            }
        } else {
            // User has not submitted the payment proof
            return redirect()->back()->with('message', 'Data Anda Tidak Ada Coba Untuk Hubungi Admin Dahulu!.');
        }
    }
}
