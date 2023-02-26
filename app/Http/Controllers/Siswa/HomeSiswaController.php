<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeSiswaController extends Controller
{
    //
   public function home() 
   {
        return view("siswa.home");
   }
}
