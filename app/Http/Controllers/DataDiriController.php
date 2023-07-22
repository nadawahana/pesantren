<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use Illuminate\Http\Request;
use App\DataSantri;
use App\Http\Requests\Santri\DataCalonSantriRequest;
use App\NilaiTotal;
use App\User;
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

    public function exportToPDF($id)
    {

        // Get the data for the logged-in user
        $data = DataSantri::where('user_id', $id)->first();
        // Generate the PDF view
        $pdf = new Dompdf();
        $pdf->loadHtml(View::make('pdf.dataSantri', ['data' => $data])->render());
        // $pdf->setPaper('A4', 'portrait');
        $pdf->setPaper(array(0, 0, 380, 500), 'potrait');
        $pdf->render();
        // // Output the generated PDF to the browser
        return $pdf->stream('Nomor Ujian ' . $data->nama_lengkap . '.pdf');
    }

    public function checkPaymentProof()
    {
        $user = Auth::id();
        $paymentProof = BuktiTF::where('user_id', $user)->where('status', 1)->first();
        if ($paymentProof) {
            // // User has submitted the payment proof
            // $data = DataSantri::where('user_id', $user)->first();
            return redirect()->route('export-pdf', ['id' => $user]);
        } else {
            // User has not submitted the payment proof
            return redirect()->back()->with('message', 'Untuk anda belum dapat mencetak kartu ujian!. Lakukan Pembayaran, jika sudah harap menunggu');
        }
    }

    public function statusKelulusan()
    {
        $user =  User::with('datasantri')->find(Auth::id());
        // dd($this->checkData($user));
        if ($this->checkData($user) == false) {
            return redirect()->back()->with('message', 'Data Anda Belum Lengkap, Segera Lengkapi Data Anda!');
        } else {
            $paymentProof = NilaiTotal::with('santri')->where('user_id', $user->id)->first();
            if ($paymentProof) {
                // User has submitted the payment proof
                $status = $user->status_kelulusan; // Assuming the "status" field is available in the "data nilai total" table
                if ($status == 0) {
                    return redirect()->back()->with('message', 'Kelulusan anda dalam tahapan proses, mohon untuk menunggu');
                } elseif ($status == 1) {
                    //LULUS 
                    return redirect()->route('userstatus');
                } elseif ($status == 2) {
                    //TIDAK LULUS 
                    return redirect()->route('userstatus2'); // Redirect to the route to export PDF for users who passed the exam
                }
            } else {
                // User has not submitted the payment proof
                return redirect()->back()->with('message', 'Data Anda Tidak Ada Coba Untuk Hubungi Admin Dahulu!.');
            }
        }
    }

    public function checkData(User $user)
    {
        $datasantri = $user->datasantri()->exists();
        $dataBuktiTransfer = $user->dataBuktiTransfer()->exists();
        $dataPersyaratan = $user->dataPersyaratan()->exists();
        $dataNilai = $user->dataNilai()->exists();
        // dd($datasantri, $dataBuktiTransfer, $dataPersyaratan, $dataNilai);
        if ($datasantri && $dataBuktiTransfer && $dataPersyaratan && $dataNilai) {
            return true;
        } else {
            return false;
        }
    }
}
