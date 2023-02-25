<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\PbsekolahModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};
use Illuminate\Support\Facades\Storage;

class OperatorDataPbsekolahController extends Controller
{
    protected $PbsekolahModel;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->PbsekolahModel = new PbsekolahModel;
    }

    public function pbsekolah() 
    {
        $pbsekolah = DB::table('pb_sekolah')
            ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

        $jumlah_pbsekolah = collect(DB::select("SELECT * FROM view_agregat_jumlahpbsekolah"))
            ->firstOrFail()
            ->jml_pbsekolah;

            return view('operator.pbsekolah.pbsekolah', compact('pbsekolah', 'jumlah_pbsekolah'));
    }

    public function tambahpbsekolah(Request $request)
    {
        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_pbsekolah' => 'required',
                'nama_pbsekolah' => 'required',
                'telp_pbsekolah' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
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

    public function editpbsekolah(PbsekolahModel $pbsekolah)
    {
        $edit = DB::table('pb_sekolah')
            ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('pb_sekolah.*', 'user.*', 'level_user.*')
            ->where('id_pbsekolah', '=', $pbsekolah->id_pbsekolah)
            ->get();

            return view('operator.pbsekolah.editpbsekolah', ["edit" => $edit]);
    }

    public function editsimpanpbsekolah(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_pbsekolah' => 'required',
                'nama_pbsekolah' => 'required',
                'telp_pbsekolah' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        if($request->fotoLama) {
            Storage::delete($request->fotoLama);
        }
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_pbsekolah(?,?,?,?,?,?,?,?,?)",
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

        return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil diubah');

    }

    public function hapuspbsekolah($id = null)
    {
        try{
            $user = $this->UserModel->where('id_user',$id)->first();
            $hapuspbsekolah = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            
            if($hapuspbsekolah){
                return redirect('/operator/pbsekolah');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}