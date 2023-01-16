<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\KaprogModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKaprogController extends Controller
{
    protected $KaprogModel, $UserModel;
    public function __construct()
    {
        $this->KaprogModel = new KaprogModel();
        $this->UserModel = new UserModel();
    }
    public function kaprog() 
    {
        $kaprog = DB::table('kaprog')
            ->join('user', 'user.id_user', '=', 'kaprog.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.kaprog.kaprog')->with('kaprog', $kaprog);
    }
    public function tambahkaprog()
    {
        $kaprog = $this->KaprogModel::all();
        return view('operator.kaprog.tambahkaprog', compact('kaprog'));
    }
    public function simpankaprog(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nip_kaprog' => 'required',
            'user' => 'required',
            'nama_kaprog' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $kaprog = [
            'nip_kaprog' => $request->nip_kaprog,
            'user' => $request->user,
            'nama_kaprog' => $request->nama_kaprog
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $kaprog['id_user'] = $id_user;
                $this->KaprogModel->create($kaprog);                
                return redirect('/operator/kaprog')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/kaprog')->with('error', 'Data gagal ditambah');
            }
    }
    public function editkaprog($id = null)
    {
        $edit = $this->KaprogModel->find($id);
        return view('operator.kaprog.editkaprog', $edit);
    }
    public function editsimpankaprog(Request $request)
    {
        try {
            $data = [
                'nama_kaprog' => $request->input('nama_kaprog')
            ];

            $upd = $this->KaprogModel
                        ->where('nip_kaprog', $request->input('nip_kaprog'))
                        ->update($data);
            if($upd){
                return redirect('/operator/kaprog');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/kaprog');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/kaprog');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}