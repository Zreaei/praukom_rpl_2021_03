<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\LevelModel;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $LevelModel;
    protected $UserModel;
    
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->LevelModel = new LevelModel;
    }

    public function user()
    {
        $dataUser = $this->UserModel::all();
        return view('admin.data-user.data-user', compact('dataUser'));
    }

    public function tambahUser()
    {
        $level = $this->LevelModel::all();
        return view('admin.data-user.tambahuser', compact('level'));
    }

    public function simpan(Request $request)
    {
        try {
            $data = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                // dd($request->all())
            ];

            $id_user = substr(md5(rand(0, 99999)), -4);
            $data['id_user'] = $id_user;
            $insert = $this->UserModel->create($data);
            //Promise 
            if ($insert) {
                return redirect('admin/data-user');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // public function edit($id = null)
    // {

    //     $edit = $this->UserModel->find($id);
    //     return view('admin.data-op.editop', $edit);
    // }
    
    // public function editsimpan(Request $request)
    // {
    //     try {
    //         $data = [
    //             'nama_operator'   => $request->input('nama_operator'),
    //         ];
    //         $upd = $this->UserModel
    //                     ->where('id_user', $request->input('id_user'))
    //                     ->update($data);
    //         if($upd){
    //             return redirect('admin.data-op.data-op');
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    public function hapus($id=null){
        try{
            $hapus = $this->UserModel
                            ->where('id_user',$id)
                            ->delete();
            if($hapus){
                return redirect('admin/data-user');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
