<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\WalasModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataWalasController extends Controller
{
    protected $WalasModel, $UserModel;
    public function __construct()
    {
        $this->WalasModel = new WalasModel();
        $this->UserModel = new UserModel();
    }
    public function walas() 
    {
        $walas = DB::table('walas')
            ->join('user', 'user.id_user', '=', 'walas.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.walas.walas')->with('walas', $walas);
    }
    public function tambahwalas()
    {
        $walas = $this->WalasModel::all();
        return view('operator.walas.tambahwalas', compact('walas'));
    }
    public function simpanwalas(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nip_walas' => 'required',
            'user' => 'required',
            'nama_walas' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $walas = [
            'nip_walas' => $request->nip_walas,
            'user' => $request->user,
            'nama_walas' => $request->nama_walas
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $walas['id_user'] = $id_user;
                $this->WalasModel->create($walas);                
                return redirect('/operator/walas')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/walas')->with('error', 'Data gagal ditambah');
            }
    }
    public function editwalas($id = null)
    {
        $edit = $this->WalasModel->find($id);
        return view('operator.walas.editwalas', $edit);
    }
    public function editsimpanwalas(Request $request)
    {
        try {
            $data = [
                'nama_walas' => $request->input('nama_walas')
            ];

            $upd = $this->WalasModel
                        ->where('nip_walas', $request->input('nip_walas'))
                        ->update($data);
            if($upd){
                return redirect('/operator/walas');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/walas');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/walas');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}