<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\PbidukaModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};
use Illuminate\Support\Facades\Storage;

class OperatorDataPbidukaController extends Controller
{
    protected $PbidukaModel;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->PbidukaModel = new PbidukaModel;
    }

    public function pbiduka() 
    {
        $pbiduka = DB::table('pb_iduka')
            ->join('user', 'user.id_user', '=', 'pb_iduka.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

        $jumlah_pbiduka = collect(DB::select("SELECT * FROM view_agregat_jumlahpbiduka"))
            ->firstOrFail()
            ->jml_pbiduka;

            return view('operator.pbiduka.pbiduka', compact('pbiduka', 'jumlah_pbiduka'));
    }

    public function tambahpbiduka(Request $request)
    {
        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nik' => 'required',
                'nama_pbiduka' => 'required',
                'telp_pbiduka' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_pbiduka(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanik, :datanama_pbiduka, :datatelp_pbiduka)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanik' => $request->nik,
                'datanama_pbiduka' => $request->nama_pbiduka,
                'datatelp_pbiduka' => $request->telp_pbiduka
            ]
        );

        return redirect('/operator/pbiduka')->with('sukses', 'Data berhasil ditambah');
    }

    public function editpbiduka(PbidukaModel $pbiduka)
    {
        $edit = DB::table('pb_iduka')
            ->join('user', 'user.id_user', '=', 'pb_iduka.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('pb_iduka.*', 'user.*', 'level_user.*')
            ->where('nik', '=', $pbiduka->nik)
            ->get();

            return view('operator.pbiduka.editpbiduka', ["edit" => $edit]);
    }

    public function editsimpanpbiduka(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nama_pbiduka' => 'required',
                'telp_pbiduka' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        if($request->fotoLama) {
            Storage::delete($request->fotoLama);
        }
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_pbiduka(?,?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->nik,
                $request->nama_pbiduka,
                $request->telp_pbiduka
            ]
        );

        return redirect('/operator/pbiduka')->with('sukses', 'Data berhasil diubah');

    }

    public function hapuspbiduka($id = null)
    {
        try{
            $user = $this->UserModel->where('id_user',$id)->first();
            $hapuspbiduka = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            
            if($hapuspbiduka){
                return redirect('/operator/pbiduka');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}