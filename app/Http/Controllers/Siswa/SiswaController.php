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
    public function profile() 
   {
        $siswa = $this->SiswaModel::all();
        $level = $this->LevelModel::all();
        $user = $this->UserModel::all();
        $siswa = DB::table('siswa') 
        ->join('user', 'user.id_user', '=', 'siswa.user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->select('siswa.*')
        ->get();  
        return view("siswa.profile", compact('siswa','level','user','siswa'));
   }
}
