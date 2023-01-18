<?php

namespace App\Http\Controllers\Admin;

use App\Models\AngkatanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataAngkatanController extends Controller
{
    protected $AngkatanModel;

    public function __construct()
    {
        $this->AngkatanModel = new AngkatanModel;
    }

    public function angkatan()
    {
        $dataAngkatan = $this->AngkatanModel::all();
        return view('admin.data-angkatan.data-angkatan', compact('dataAngkatan'));
    }
}
