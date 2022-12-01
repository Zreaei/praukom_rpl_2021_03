<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\AdmkeuModel;
use Error;
use Exception;
use Illuminate\Http\Request;

class DataAdmkeuController extends Controller
{
    protected $admkeuModel;
    public function __construct()
    {
        $this->admkeuModel = new AdmkeuModel;
    }
    public function admkeu() 
    {
        
        $data = [
            'title' => 'Daftar Admkeu',
            'admkeu' => $this->admkeuModel->all()
        ];
        return view('operator.admkeu', $data);
    }
    public function tambahadmkeu()
    {
        return view('operator.tambahadmkeu');
    }
    public function simpanadmkeu(Request $request)
    {
        try {
            $data = [
                'id_admkeu' => $request->input('id_admkeu'),
                'id_user' => $request->input('id_user'),
                'nama_admkeu' => $request->input('id_user')
            ];

            $nis = substr(md5(rand(0, 99999)), -4);
            $data['id_admkeu'] = $id_admkeu;
            $insert = $this->admkeuModel->create($data);
            if ($insert) {
                return redirect('operator.admkeu');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editadmkeu($id = null)
    {

        $edit = $this->admkeuModel->find($id);
        return view('operator.editadmkeu', $edit);
    }
    public function editsimpanadmkeu(Request $request)
    {
        try {
            $data = [
                'id_admkeu' => $request->input('id_admkeu'),
                'id_user' => $request->input('id_user'),
                'nama_admkeu' => $request->input('id_user')
            ];

            $upd = $this->admkeuModel
                        ->where('id_admkeu', $request->input('id_admkeu'))
                        ->update($data);
            if($upd){
                return redirect('id_admkeu');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapusadmkeu($id=null){
        try{
            $hapus = $this->admkeuModel
                            ->where('id_admkeu',$id)
                            ->delete();
            if($hapus){
                return redirect('operator.admkeu');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
