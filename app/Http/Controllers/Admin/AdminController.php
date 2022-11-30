<?php

namespace App\Http\Controllers\Admin;

use App\Models\OperatorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $OperatorModel;
    public function __construct()
    {
        $this->OperatorModel = new OperatorModel;
    }
    public function index()
    {
        return view('admin.home');
    }

    public function operator()
    {
        $daftar = $this->OperatorModel::all();
        return view('admin.data-op.data-op', compact('daftar'));
    }

    public function siswa()
    {
        return view('admin.data-siswa.data-siswa');
    }

}
