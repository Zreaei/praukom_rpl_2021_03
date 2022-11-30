<?php

namespace App\Http\Controllers;

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
}
