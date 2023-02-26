<?php

namespace App\Http\Controllers\PbIduka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePbidukaController extends Controller
{
    //
    public function home() 
     {
        return view("pbiduka.home");
     }
}
