<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\PbidukaModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPbidukaController extends Controller
{
    protected $PbidukaModel, $UserModel;
    public function __construct()
    {
        $this->PbidukaModel = new PbidukaModel();
        $this->UserModel = new UserModel();
    }
    public function pbiduka() 
    {
        $pbiduka = DB::table('pb_iduka')
            ->join('user', 'user.id_user', '=', 'pb_iduka.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.pbiduka.pbiduka')->with('pbiduka', $pbiduka);
    }
    public function tambahpbiduka()
    {
        $pbiduka = $this->PbidukaModel::all();
        return view('operator.pbiduka.tambahpbiduka', compact('pbiduka'));
    }
    public function simpanpbiduka(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nik_pbiduka' => 'required',
            'user' => 'required',
            'nama_pbiduka' => 'required',
            'telp_pbiduka' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $pbiduka = [
            'nik_pbiduka' => $request->nik_pbiduka,
            'user' => $request->user,
            'nama_pbiduka' => $request->nama_pbiduka,
            'telp_pbiduka' => $request->telp_pbiduka
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $pbiduka['id_user'] = $id_user;
                $this->PbidukaModel->create($pbiduka);                
                return redirect('/operator/pbiduka')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/pbiduka')->with('error', 'Data gagal ditambah');
            }
    }
    public function editpbiduka($id = null)
    {
        $edit = $this->PbidukaModel->find($id);
        return view('operator.pbiduka.editpbiduka', $edit);
    }
    public function editsimpanpbiduka(Request $request)
    {
        try {
            $data = [
                'nama_pbiduka' => $request->input('nama_pbiduka'),
                'telp_pbiduka' => $request->input('telp_pbiduka')
            ];

            $upd = $this->PbidukaModel
                        ->where('nik_pbiduka', $request->input('nik_pbiduka'))
                        ->update($data);
            if($upd){
                return redirect('/operator/pbiduka');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/pbiduka');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/pbiduka');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}