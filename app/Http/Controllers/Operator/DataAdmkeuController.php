<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\AdmkeuModel;
<<<<<<< HEAD
use App\Models\UserModel;
use Error;
=======
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAdmkeuController extends Controller
{
<<<<<<< HEAD
    protected $AdmkeuModel, $UserModel;
    public function __construct()
    {
        $this->AdmkeuModel = new AdmkeuModel();
        $this->UserModel = new UserModel();
=======
    protected $AdmkeuModel;
    protected $UserModel;
    
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->AdmkeuModel = new AdmkeuModel;
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    }

    public function admkeu()
    {
<<<<<<< HEAD
        $admkeu = DB::table('adm_keuangan')
            ->join('user', 'user.id_user', '=', 'adm_keuangan.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.admkeu.admkeu')->with('admkeu', $admkeu);
=======
        $dataAdmkeu = $this->AdmkeuModel::all();
        return view('operator.admkeu.admkeu', compact('dataAdmkeu'));
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    }

    public function tambahAdmkeu()
    {
<<<<<<< HEAD
        $admkeu = $this->AdmkeuModel::all();
        return view('operator.admkeu.tambahadmkeu', compact('admkeu'));
=======
        $dataUser = $this->UserModel::all();
        return view('operator.admkeu.tambahadmkeu', compact('dataUser'));
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    }

    public function simpan(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'id_admkeu' => 'required',
            'user' => 'required',
            'nama_admkeu' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $admkeu = [
            'id_admkeu' => $request->id_admkeu,
            'user' => $request->user,
            'nama_admkeu' => $request->nama_admkeu
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $admkeu['id_user'] = $id_user;
                $this->AdmkeuModel->create($admkeu);                
                return redirect('/operator/admkeu')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/admkeu')->with('error', 'Data gagal ditambah');
=======
        try {
            $data = [
                '' => $request->input('username'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'level' => $request->input('level'),
                // dd($request->all())
            ];

            $id_user = substr(md5(rand(0, 99999)), -4);
            // $id_user = 'USR001';
            $data['id_user'] = $id_user;
            $insert = $this->UserModel->create($data);
            //Promise 
            if ($insert) {
                return redirect('admin/data-user');
            } else {
                return "input data gagal";
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
            }
    }
<<<<<<< HEAD
    public function editadmkeu($id = null)
    {
        $edit = $this->AdmkeuModel->find($id);
        return view('operator.admkeu.editadmkeu', $edit);
=======

    public function edit($id = null)
    {

        $edit = $this->UserModel->find($id);
        // echo json_encode($edit);
        return view('data-user.edituser', $edit);
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    }
    public function simpanedit(Request $request)
    {
        try {
            $data = [
<<<<<<< HEAD
                'nama_admkeu' => $request->input('nama_admkeu')
            ];

            $upd = $this->AdmkeuModel
                        ->where('id_admkeu', $request->input('id_admkeu'))
                        ->update($data);
            if($upd){
                return redirect('/operator/admkeu');
=======
                'username'   => $request->input('username'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'level' => $request->input('level'),
            ];
            $upd = $this->UserModel
                        ->where('id_user', $request->input('id_user'))
                        ->update($data);
            if($upd){
                return redirect('admin/data-user');
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/admkeu');
        }
    }

<<<<<<< HEAD
    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/admkeu');
=======
    // public function edit($id = null)
    // {
    //     $edit = $this->UserModel->find($id);
    //     echo json_encode($edit);
    //     dd($edit);
    //     return view('admin.data-user.edituser', $edit);
    // }
    
    // public function simpanedit(Request $request)
    // {
    //     try {
    //         $data = [
    //             'username' => $request->input('username'),
    //             'password' => $request->input('password'),
    //             'email' => $request->input('email'),
    //             'level' => $request->input('level'),
    //         ];
    //         $upd = $this->UserModel
    //                     ->where('id_user', $request->input('id_user'))
    //                     ->update($data);
    //         if($upd){
    //             return redirect('admin/data-user');
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
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}