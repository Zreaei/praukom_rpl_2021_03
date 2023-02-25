<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\VerifikatorModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};
use Illuminate\Support\Facades\Storage;

class OperatorDataVerifikatorController extends Controller
{
    protected $VerifikatorModel;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->VerifikatorModel = new VerifikatorModel;
    }

    public function verifikator() 
    {
        $verifikator = DB::table('verifikator')
            ->join('user', 'user.id_user', '=', 'verifikator.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

        $jumlah_verifikator = collect(DB::select("SELECT * FROM view_agregat_jumlahverifikator"))
            ->firstOrFail()
            ->jml_verifikator;

            return view('operator.verifikator.verifikator', compact('verifikator', 'jumlah_verifikator'));
    }

    public function tambahverifikator(Request $request)
    {
        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_verifikator' => 'required',
                'nama_verifikator' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_verifikator(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanip_verifikator, :datanama_verifikator)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanip_verifikator' => $request->nip_verifikator,
                'datanama_verifikator' => $request->nama_verifikator
            ]
        );

        return redirect('/operator/verifikator')->with('sukses', 'Data berhasil ditambah');
    }

    public function editverifikator(VerifikatorModel $verifikator)
    {
        $edit = DB::table('verifikator')
            ->join('user', 'user.id_user', '=', 'verifikator.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('verifikator.*', 'user.*', 'level_user.*')
            ->where('id_verifikator', '=', $verifikator->id_verifikator)
            ->get();

            return view('operator.verifikator.editverifikator', ["edit" => $edit]);
    }

    public function editsimpanverifikator(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_verifikator' => 'required',
                'nama_verifikator' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        if($request->fotoLama) {
            Storage::delete($request->fotoLama);
        }
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_verifikator(?,?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->id_verifikator,
                $request->nip_verifikator,
                $request->nama_verifikator
            ]
        );

        return redirect('/operator/verifikator')->with('sukses', 'Data berhasil diubah');

    }

    public function hapusverifikator($id = null)
    {
        try{
            $user = $this->UserModel->where('id_user',$id)->first();
            $hapusverifikator = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            
            if($hapusverifikator){
                return redirect('/operator/verifikator');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}