<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmkeuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAdmkeuController extends Controller
{
    protected $AdmkeuModel; 

    public function __construct()
    {
        $this->AdmkeuModel = new AdmkeuModel;
    }

    public function admkeu()
    {
        $dataAdmkeu = DB::table('adm_keuangan')
        ->join('user', 'user.id_user', '=', 'adm_keuangan.user')
        ->get();
        return view('admin.data-admkeu.data-admkeu', compact('dataAdmkeu'));
    }
}
