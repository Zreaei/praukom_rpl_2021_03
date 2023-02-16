<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LevelModel;
use Illuminate\Http\Request;

class DataLevelController extends Controller
{
    protected $LevelModel;
    
    public function __construct()
    {

        $this->LevelModel = new LevelModel;
    }

    public function level()
    {
        $dataLevel = $this->LevelModel::all();
        return view('admin.data-level.data-level', compact('dataLevel'));
    }
}
