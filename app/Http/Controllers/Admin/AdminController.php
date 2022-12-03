<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OperatorModel;
use App\Models\UserModel;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $UserModel;
    protected $OperatorModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->OperatorModel = new OperatorModel;
    }
    
    public function index()
    {
        return view('admin.home');
    }

    // public function operator()
    // {
    //     $daftar = $this->OperatorModel::all();
    //     return view('admin.data-op.data-op', compact('daftar'));
    // }

    // public function tambahOpr()
    // {
    //     $user = $this->UserModel::all();
    //     return view('admin.data-op.tambahop', compact('user'));
    // }

    // public function simpan(Request $request)
    // {
    //     try {
    //         $data = [
    //             'user' => $request->input('user'),
    //             // 'user' => substr(md5(rand(0, 99999)), -4),
    //             'nama_operator' => $request->input('nama_operator'),
    //             // dd($request->all())
    //         ];
         
    //         $id_operator = substr(md5(rand(0, 99999)), -4);
    //         $data['id_operator'] = $id_operator;
    //         $insert = $this->OperatorModel->create($data);
    //         //Promise 
    //         if ($insert) {
    //             return redirect('admin/data-op');
    //         } else {
    //             return ('input data gagal');
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function edit($id = null)
    // {

    //     $edit = $this->OperatorModel->find($id);
    //     return view('admin.data-op.editop', $edit);
    // }
    
    // public function simpanedit (Request $request)
    // {
    //     try {
    //         $data = [
    //             'user' => $request->input('user'),
    //             'nama_operator' => $request->input('nama_operator'),
    //         ];
    //         $upd = $this->OperatorModel
    //                     ->where('id_operator', $request->input('id_operator'))
    //                     ->update($data);
    //         if($upd){
    //             return redirect('admin/data-op');
    //         } else {
    //             dd($request->all());
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function hapus($id=null){
    //     try{
    //         $hapus = $this->OperatorModel
    //                         ->where('id_operator',$id)
    //                         ->delete();
    //         if($hapus){
    //             return redirect('admin/data-op');
    //         }
    //     }catch(Exception $e){
    //         $e->getMessage();
    //     }
    // }
    

}
