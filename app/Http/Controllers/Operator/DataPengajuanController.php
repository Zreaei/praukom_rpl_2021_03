<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\PbsekolahModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Storage};

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
        $user = DB::table('pb_sekolah')
            ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.pbsekolah.pbsekolah')->with('user', $user);
    }
    // public function tambahpbsekolah()
    // {
    //     $pbsekolah = $this->PbsekolahModel::all();
    //     return view('operator.pbsekolah.tambahpbsekolah', compact('pbsekolah'));
    // }
    public function tambahpbsekolah(Request $request)
    {
        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'tambahfoto_user' => 'required',
                'nip_pbsekolah' => 'required',
                'nama_pbsekolah' => 'required',
                'telp_pbsekolah' => 'required'
            ]
        );

        $img = $request->file('tambahfoto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_pbsekolah(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanip_pbsekolah, :datanama_pbsekolah, :datatelp_pbsekolah)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanip_pbsekolah' => $request->nip_pbsekolah,
                'datanama_pbsekolah' => $request->nama_pbsekolah,
                'datatelp_pbsekolah' => $request->telp_pbsekolah
            ]
        );

        return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil ditambah');
    }
    public function editpbsekolah(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'editfoto_user' => 'required',
                'nip_pbsekolah' => 'required',
                'nama_pbsekolah' => 'required',
                'telp_pbsekolah' => 'required'
            ]
        );

        $img = $request->file('editfoto_user')->store('img');
        if($request->fotoLama) {
            Storage::delete($request->fotoLama);
        }
        $pass = Hash::make($request->input('password'));

        $edit = DB::select("CALL procedure_update_pbsekolah(?,?,?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->id_pbsekolah,
                $request->nip_pbsekolah,
                $request->nama_pbsekolah,
                $request->telp_pbsekolah
            ]
        );

        ddd($edit);

        return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil diubah');

    }

    public function detailpbsekolah(PbsekolahModel $pbsekolah)
    {
        $user = DB::table('pb_sekolah')
            ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('pb_sekolah.*', 'user.*', 'level_user.*')
            ->where('id_pbsekolah', '=', $pbsekolah->id_pbsekolah)
            ->get();

            return view('operator.pbsekolah.detailpbsekolah', ["user" => $user]);
    }

    public function hapuspbsekolah($id = null)
    {
        try{
            $user = $this->UserModel->where('id_user',$id)->first();
            $hapuspbsekolah = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            
            if($hapusadmkeu){
                return redirect('/operator/admkeu');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}