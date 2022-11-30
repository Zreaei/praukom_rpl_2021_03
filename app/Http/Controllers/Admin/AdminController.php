<?php

namespace App\Http\Controllers\Admin;

use App\Models\OperatorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

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

    public function tambahOpr()
    {
        return view('admin.data-op.tambahop');
    }

    public function simpan(Request $request)
    {
        try {
            $data = [
                'user' => $request->input('user'),
                'nama_operator' => $request->input('nama_operator'),
                // dd($request->all())
            ];

            $id_operator = substr(md5(rand(0, 99999)), -4);
            $data['id_operator'] = $id_operator;
            // $data['user'] = 'USR002';
            $insert = $this->OperatorModel->create($data);
            //Promise 
            if ($insert) {
                return redirect('admin/data-op');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}
