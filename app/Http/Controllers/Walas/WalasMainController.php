<?php

namespace App\Http\Controllers\Walas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalasMainController extends Controller
{
    public function home()
    {
        return view('walas.home');
    }
}
