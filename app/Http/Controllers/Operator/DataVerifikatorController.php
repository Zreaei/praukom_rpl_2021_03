<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\VerifikatorModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataVerifikatorController extends Controller
{
    protected $VerifikatorModel, $UserModel;
    public function __construct()
    {
        $this->VerifikatorModel = new VerifikatorModel();
        $this->UserModel = new UserModel();
    }
    public function verifikator() 
    {
        $verifikator = DB::table('verifikator')
            ->join('user', 'user.id_user', '=', 'verifikator.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.verifikator.verifikator')->with('verifikator', $verifikator);
    }
    public function tambahverifikator()
    {
        $verifikator = $this->VerifikatorModel::all();
        return view('operator.verifikator.tambahverifikator', compact('verifikator'));
    }
    public function simpanverifikator(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'id_verifikator' => 'required',
            'user' => 'required',
            'nama_verifikator' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $verifikator = [
            'id_verifikator' => $request->id_verifikator,
            'user' => $request->user,
            'nama_verifikator' => $request->nama_verifikator
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $verifikator['id_user'] = $id_user;
                $this->VerifikatorModel->create($verifikator);                
                return redirect('/operator/verifikator')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/verifikator')->with('error', 'Data gagal ditambah');
            }
    }
    public function editverifikator($id = null)
    {
        $edit = $this->VerifikatorModel->find($id);
        return view('operator.verifikator.editverifikator', $edit);
    }
    public function editsimpanverifikator(Request $request)
    {
        try {
            $data = [
                'nama_verifikator' => $request->input('nama_verifikator')
            ];

            $upd = $this->VerifikatorModel
                        ->where('id_verifikator', $request->input('id_verifikator'))
                        ->update($data);
            if($upd){
                return redirect('/operator/verifikator');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/verifikator');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/verifikator');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}