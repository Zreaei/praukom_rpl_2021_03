<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\AdmkeuModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAdmkeuController extends Controller
{
    protected $AdmkeuModel;
    protected $UserModel;
    
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->AdmkeuModel = new AdmkeuModel;
    }

    public function admkeu()
    {
        $admkeu = DB::table('adm_keuangan')
            ->join('user', 'user.id_user', '=', 'adm_keuangan.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.admkeu.admkeu')->with('admkeu', $admkeu);
    }

    public function tambahadmkeu()
    {
        $admkeu = $this->AdmkeuModel::all();
        return view('operator.admkeu.tambahadmkeu', compact('admkeu'));
    }

    public function simpanadmkeu(Request $request)
    {
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
            }
    }
    public function editadmkeu($id = null)
    {
        $edit = $this->AdmkeuModel->find($id);
        return view('operator.admkeu.editadmkeu', $edit);
    }
    public function editsimpanadmkeu(Request $request)
    {
        try {
            $data = [
                'nama_admkeu' => $request->input('nama_admkeu')
            ];

            $upd = $this->AdmkeuModel
                        ->where('id_admkeu', $request->input('id_admkeu'))
                        ->update($data);
            if($upd){
                return redirect('/operator/admkeu');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/admkeu');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/admkeu');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}