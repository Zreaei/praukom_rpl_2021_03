<?php

namespace App\Http\Controllers\Siswa;

use App\Models\SiswaModel;
use App\Models\LevelModel;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
     protected $SiswaModel;
     protected $LevelModel;
     protected $UserModel;
     public function __construct()
    {
        $this->SiswaModel = new SiswaModel;
        $this->LevelModel = new LevelModel;
        $this->UserModel = new UserModel;
    }
    private function getSiswa($nis)
    {
     // return collect(DB::select('SELECT * FROM siswa WHERE nis = ? ', [$nis]))->firstOrFail();
     return collect(DB::table('siswa')->leftJoin('user', 'siswa.user', '=', 'user.id_user')->where('nis', $nis)->first());

    }
    public function profile($nis = null) 
   {

     // $asoip = $this->getSiswa($nis);
     $asoip = DB::table('user')->leftJoin('siswa', 'user.id_user', '=', 'siswa.user')->where('siswa.nis', $nis)->first();
     dd($asoip);
        return view("siswa.profile", compact('asoip'));
   }
   public function home() 
   {
        return view("siswa.home");
   }
}
