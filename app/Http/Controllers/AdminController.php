<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\BuktiTF;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function grafik(Request $request)
    {
        $data = BuktiTF::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(DISTINCT user_id) as total'))
            ->groupBy('date')
            ->get();

        $formattedData = $data->map(function ($row) {
            $date = Carbon::parse($row->date)->format('Y-m-d');
            return [
                'date' => $date,
                'total' => $row->total
            ];
        });

        // dd($formattedData); 

        return view('grafik', compact('formattedData'));
    }

}
