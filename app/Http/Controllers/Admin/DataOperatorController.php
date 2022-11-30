<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OperatorModel;
use Exception;
use Illuminate\Http\Request;

class DataOperatorController extends Controller
{
    //
    protected $OperatorModel;
    public function __construct()
    {
        $this->OperatorModel = new OperatorModel;
    }

    public function tambahOpr()
    {
        return view('admin.data-op.tambahop');
    }

    public function simpan(Request $request)
    {
        try {
            $data = [
                'nama_operator' => $request->input('nama_operator'),
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

    public function edit($id = null)
    {

        $edit = $this->OperatorModel->find($id);
        return view('admin.data-op.editop', $edit);
    }
    
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_operator'   => $request->input('nama_operator'),
            ];
            $upd = $this->OperatorModel
                        ->where('id_operator', $request->input('id_operator'))
                        ->update($data);
            if($upd){
                return redirect('admin.data-op.data-op');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id=null){
        try{
            $hapus = $this->OperatorModel
                            ->where('id_operator',$id)
                            ->delete();
            if($hapus){
                return redirect('admin/data-op');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
