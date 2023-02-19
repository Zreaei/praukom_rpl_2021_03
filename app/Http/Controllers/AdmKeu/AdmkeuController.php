<?php

namespace App\Http\Controllers\AdmKeu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmkeuController extends Controller
{
    //
   public function profile() 
   {
        return view("admkeu.profile");
   }
}
