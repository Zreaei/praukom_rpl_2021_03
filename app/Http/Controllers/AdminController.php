<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // public function index()
    // {
    //     $datot = User::all();
    //     return view('admin.home', compact('datot'));
    // }

    public function operator()
    {
        $data = AdminModel::all();
        return view('admin.data-op', compact('data'));
    }

    public function siswa()
    {
        return view('admin.data-siswa');
    }
}
