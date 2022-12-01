<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function home() 
    {
        return view('siswa.home');
    }
    public function profil() 
    {
        return view('siswa.profil');
    }
    public function pengajuan() 
    {
        return view('siswa.pengajuan');
    }
}
