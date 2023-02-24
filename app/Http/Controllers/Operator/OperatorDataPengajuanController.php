<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\{PengajuanModel, SiswaModel, KelasModel, JurusanModel, IdukaModel};
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Storage};

class OperatorDatapengajuanController extends Controller
{
    protected $PengajuanModel;
    protected $SiswaModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel();
        $this->SiswaModel = new SiswaModel();
    }
    public function pengajuan() 
    {
        $user = DB::table('pengajuan')
            ->join('user', 'user.id_user', '=', 'pengajuan.Siswa')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.pengajuan.pengajuan')->with('user', $user);
    }
}