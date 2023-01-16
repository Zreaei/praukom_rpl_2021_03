<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PrakerinController extends Controller
{
    //
    public function __construct()
    {
        $this->PrakerinModel = new PrakerinModel;
    }
    public function prakerin()
    {
        //menampilkan seluruh pengajuan
        $prakerin = DB::select('SELECT * from id_prakerin');
        return view('siswa.prakerin',compact('prakerin'));
    }
}
