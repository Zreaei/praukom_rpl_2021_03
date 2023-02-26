<?php

namespace App\Http\Controllers\AdmKeu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeAdmkeuController extends Controller
{
    //
   public function home() 
   {
        return view("admkeu.home");
   }
}
