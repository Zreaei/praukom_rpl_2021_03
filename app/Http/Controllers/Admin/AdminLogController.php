<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{UserModel, LogModel};

class AdminLogController extends Controller
{
    protected $UserModel;
    protected $LogModel; 

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->LogModel = new LogModel;
    }

    public function log()
    {
        $dataLog = DB::table('log_admin_user')
        ->get();
        return view('admin.data-log.data-log', compact('dataLog'));
    }

}
