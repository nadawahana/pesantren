<?php

namespace App\Http\Controllers;

use App\BuktiTF;
use Carbon\Carbon;
use App\DataSantri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function grafik(Request $request)
    {
        $data = [
            'santriPerHari' => $this->santriPerHari(),
            'santriPerTahun' => $this->santriPerTahun(),
            'santriLulus' => $this->santriLulus(),
        ];
        return view('grafik', ['data' => $data]);
    }

    public function santriPerHari()
    {
        $datasantri = DataSantri::select('created_at', DB::raw('count(*) as total'))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
            ->orderBy('created_at', 'desc')
            ->get()->pluck('total', 'created_at');
        $labels = $datasantri->keys()->map(function ($tanggal) {
            return Str::substr($tanggal, 0, 10);
        });
        $data  = $datasantri->values();
        $row = [
            'labels' => $labels,
            'data' => $data
        ];
        return $row;
    }

    public function santriPerTahun()
    {
        $datasantri = DataSantri::select(DB::raw('YEAR(created_at) year'), DB::raw('count(*) as total'))
            ->groupby('year')
            ->orderBy('year', 'desc')
            ->get()->pluck('total', 'year');
        $labels = $datasantri->keys()->map(function ($tanggal) {
            return Str::substr($tanggal, 0, 10);
        });
        $data  = $datasantri->values();
        $row = [
            'labels' => $labels,
            'data' => $data
        ];
        return $row;
    }

    public function santriLulus()
    {
        //SELECT count(id) FROM `users` where level="calon-santri" and status_kelulusan='1';
        $datasantri = DataSantri::with('user')
            ->select('user_id', DB::raw('YEAR(created_at) as year'), DB::raw('count(id) as total'))
            ->whereHas('user', function ($q) {
                $q->where('status_kelulusan', '1');
                $q->where('level', 'calon-santri');
            })
            ->groupby('year')
            ->orderBy('year', 'desc')
            ->get()->pluck('total', 'year');
        $labels = $datasantri->keys();
        $data  = $datasantri->values();
        $row = [
            'labels' => $labels,
            'data' => $data
        ];
        return $row;
    }
}
