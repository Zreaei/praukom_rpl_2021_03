<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function home() 
    {
        return view('operator.home');
    }
    public function profile() 
    {
        return view('operator.profile');
    }
}
