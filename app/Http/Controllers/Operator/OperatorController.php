<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function home()
    {
        return view('operator.home');
    }
}
