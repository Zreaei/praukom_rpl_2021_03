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
<<<<<<< HEAD
                $tambah_user = DB::select('CALL procedure_insert_admkeu(?,?,?,?,?,?)', [
                    $validated['datalevel'],
                    $validated['datausername'],
                    $validated['datapassword'],
                    $validated['dataemail'],
                    $validated['datafoto_user'],
                    $validated['datanama_admkeu']
                ]);
=======
                $id_user = $this->UserModel->create($user);
                $admkeu['id_user'] = $id_user;
                $this->AdmkeuModel->create($admkeu);
>>>>>>> 75c752711d91d00ef6a6dd8af2d014c76b667d08
                return redirect('/operator/admkeu')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/admkeu')->with('error', 'Data gagal ditambah');
            }
    }
    public function editadmkeu($id = null)
    {
        $edit = $this->AdmkeuModel->find($id);
        return view('operator.admkeu.editadmkeu', $edit);
    }
    public function editsimpanadmkeu(Request $request)
    {
        try {
            $data = [
                'nama_admkeu' => $request->input('nama_admkeu')
            ];

            $upd = $this->AdmkeuModel
                        ->where('id_admkeu', $request->input('id_admkeu'))
                        ->update($data);
            if($upd){
                return redirect('/operator/admkeu');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/admkeu');
        }
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
