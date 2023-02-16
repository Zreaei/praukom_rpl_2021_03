<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmkeuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAdmkuController extends Controller
{
    protected $AdmkeuModel; 

    public function __construct()
    {
        $this->AdmkeuModel = new AdmkeuModel;
    }

    public function admku()
    {
        $dataAdmku = DB::table('adm_keuangan')->get();
        return view('admin.data-admku.data-admku', compact('dataAdmku'));
    }
}
