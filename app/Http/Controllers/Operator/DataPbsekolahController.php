<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\PbsekolahModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPbsekolahController extends Controller
{
    protected $PbsekolahModel, $UserModel;
    public function __construct()
    {
        $this->PbsekolahModel = new PbsekolahModel();
        $this->UserModel = new UserModel();
    }
    public function pbsekolah() 
    {
        $pbsekolah = DB::table('pb_sekolah')
            ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.pbsekolah.pbsekolah')->with('pbsekolah', $pbsekolah);
    }
    public function tambahpbsekolah()
    {
        $pbsekolah = $this->PbsekolahModel::all();
        return view('operator.pbsekolah.tambahpbsekolah', compact('pbsekolah'));
    }
    public function simpanpbsekolah(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nip_pbsekolah' => 'required',
            'user' => 'required',
            'nama_pbsekolah' => 'required',
            'telp_pbsekolah' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $pbsekolah = [
            'nip_pbsekolah' => $request->nip_pbsekolah,
            'user' => $request->user,
            'nama_pbsekolah' => $request->nama_pbsekolah,
            'telp_pbsekolah' => $request->telp_pbsekolah
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $pbsekolah['id_user'] = $id_user;
                $this->PbsekolahModel->create($pbsekolah);                
                return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/pbsekolah')->with('error', 'Data gagal ditambah');
            }
    }
    public function editpbsekolah($id = null)
    {
        $edit = $this->PbsekolahModel->find($id);
        return view('operator.pbsekolah.editpbsekolah', $edit);
    }
    public function editsimpanpbsekolah(Request $request)
    {
        try {
            $data = [
                'nama_pbsekolah' => $request->input('nama_pbsekolah'),
                'telp_pbsekolah' => $request->input('telp_pbsekolah')
            ];

            $upd = $this->PbsekolahModel
                        ->where('nip_pbsekolah', $request->input('nip_pbsekolah'))
                        ->update($data);
            if($upd){
                return redirect('/operator/pbsekolah');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/pbsekolah');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/pbsekolah');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}