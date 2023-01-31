<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\AdmkeuModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataAdmkeuController extends Controller
{
    protected $AdmkeuModel;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->AdmkeuModel = new AdmkeuModel;
    }

    private function generateKodeUser(): string
    {
        return collect(DB::select('SELECT generate_new_kode_user() AS new_kode_user'))
        ->firstOrFail()
        ->new_kode_user;
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
        $admkeu = $this->AdmkeuModel::all();
        return view('operator.admkeu.tambahadmkeu', compact('admkeu'));
    }

    public function simpanadmkeu(Request $request)
    {

        $validated = $request->validate([
            'datalevel' => 'required',
            'datausername' => 'required',
            'datapassword' => 'required',
            'dataemail' => 'required',
            'datafoto_user' => 'required',
            'datanama_admkeu' => 'required',
        ]);

            try {
                $tambah_user = DB::select('CALL procedure_insert_admkeu(?,?,?,?,?,?)', [
                    $validated['datalevel'],
                    $validated['datausername'],
                    $validated['datapassword'],
                    $validated['dataemail'],
                    $validated['datafoto_user'],
                    $validated['datanama_admkeu']
                ]);
                return redirect('/operator/admkeu')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/admkeu')->with('error', 'Data gagal ditambah');
            }
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
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'foto_user' => 'required',
            'nama_admkeu' => 'required',
        ]);

            try {
                $edit_user = DB::select('CALL procedure_update_admkeu(?,?,?,?,?,?,?)', [
                    $request->user,
                    $validated['username'],
                    $validated['password'],
                    $validated['email'],
                    $validated['foto_user'],
                    $request->id_admkeu,
                    $validated['nama_admkeu']
                ]);
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            return redirect('/operator/admkeu');
        }
        // dd($edit_user);
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

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/admkeu');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
