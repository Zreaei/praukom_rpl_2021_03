<?php

namespace App\Http\Controllers\PbIduka;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPrakerinPbidukaController extends Controller
{
    //
    public function dataprakerin() 
    {
        return view("pbiduka.prakerin");
    }
}
