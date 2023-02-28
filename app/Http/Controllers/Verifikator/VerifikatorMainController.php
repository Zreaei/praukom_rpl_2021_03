<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifikatorMainController extends Controller
{
    public function home()
    {
        return view('verifikator.home');
    }
}
