<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\{UserModel, AdmkeuModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Storage};

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
        return view('operator.admkeu.tambahadmkeu');
    }

    public function simpanadmkeu(Request $request)
    {

        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nama_admkeu' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_admkeu(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanama_admkeu)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanama_admkeu' => $request->nama_admkeu
            ]
        );

        return redirect('/operator/admkeu')->with('sukses', 'Data berhasil ditambah');
    }

    public function editadmkeu(AdmkeuModel $admkeu)
    {
        $edit = DB::table('adm_keuangan')
            ->join('user', 'user.id_user', '=', 'adm_keuangan.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('adm_keuangan.*', 'user.*', 'level_user.*')
            ->where('id_admkeu', '=', $admkeu->id_admkeu)
            ->get();


            return view('operator.admkeu.editadmkeu', ["edit" => $edit]);
    }

    public function editsimpanadmkeu(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nama_admkeu' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_admkeu(?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->id_admkeu,
                $request->nama_admkeu
            ]
        );

        return redirect('/operator/admkeu')->with('sukses', 'Data berhasil diubah');

    }

    public function detailadmkeu(AdmkeuModel $admkeu)
    {
        $detail = DB::table('adm_keuangan')
            ->join('user', 'user.id_user', '=', 'adm_keuangan.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('adm_keuangan.*', 'user.*', 'level_user.*')
            ->where('id_admkeu', '=', $admkeu->id_admkeu)
            ->get();


            return view('operator.admkeu.detailadmkeu', ["detail" => $detail]);
    }

    public function hapusadmkeu($id = null)
    {
        try{
            $hapusadmkeu = $this->UserModel->where('id_user',$id)->delete();
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
