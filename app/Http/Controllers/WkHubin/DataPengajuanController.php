<?php

namespace App\Http\Controllers\Wkhubin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanModel;
use Exception;
use Illuminate\Http\Request;

class DataPengajuanController extends Controller
{
    protected $PengajuanModel;

    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
    }

    public function pengajuan()
    {
        $pengajuan = $this->PengajuanModel::all();
        return view('wkhubin.pengajuan.pengajuan', compact('pengajuan'));
    }
}
