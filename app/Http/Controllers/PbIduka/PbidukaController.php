<?php

namespace App\Http\Controllers\PbIduka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PbidukaController extends Controller
{
    //
    public function profile() 
    {
        return view("pbiduka.profile");
    }
    public function home() 
    {
       return view("pbiduka.home");
    }
}
