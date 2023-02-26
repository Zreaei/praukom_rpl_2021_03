<?php

namespace App\Http\Controllers\Walas;

use App\Http\Controllers\Controller;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalasPengajuanController extends Controller
{
    protected $SiswaModel;

    public function __construct()
    {
        $this->SiswaModel = new SiswaModel;
    }

    public function pengajuan()
    {
        $dataPengajuan = DB::table('pengajuan')
        ->get();
        return view('walas.data-pengajuan.data-pengajuan', compact('dataPengajuan'));
    }
}
