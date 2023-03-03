<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifikatorPenilaianController extends Controller
{
    public function penilaian()
    {
        $dataPenilaian = DB::table('penilaian_verif')
        ->get();
        return view('verifikator.penilaian', compact('dataPenilaian'));
    }
}
