<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\{UserModel, KaprogModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash, Storage};

class DataKaprogController extends Controller
{
    protected $KaprogModel;
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->KaprogModel = new KaprogModel;
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
        return view('operator.kaprog.tambahkaprog');
    }

    public function simpankaprog(Request $request)
    {

        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_kaprog' => 'required',
                'nama_kaprog' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_kaprog(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanip_kaprog, :datanama_kaprog)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanip_kaprog' =>$request->nip_kaprog,
                'datanama_kaprog' => $request->nama_kaprog
            ]
        );

        return redirect('/operator/kaprog')->with('sukses', 'Data berhasil ditambah');
    }

    public function editkaprog(KaprogModel $kaprog)
    {
        $edit = DB::table('kaprog')
            ->join('user', 'user.id_user', '=', 'kaprog.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('kaprog.*', 'user.*', 'level_user.*')
            ->where('id_kaprog', '=', $kaprog->id_kaprog)
            ->get();


            return view('operator.kaprog.editkaprog', ["edit" => $edit]);
    }

    public function editsimpankaprog(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nip_kaprog' => 'required',
                'nama_kaprog' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_kaprog(?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->id_kaprog,
                $request->nama_kaprog
            ]
        );

        return redirect('/operator/kaprog')->with('sukses', 'Data berhasil diubah');

    }

    public function detailkaprog(KaprogModel $kaprog)
    {
        $detail = DB::table('kaprog')
            ->join('user', 'user.id_user', '=', 'kaprog.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('kaprog.*', 'user.*', 'level_user.*')
            ->where('id_kaprog', '=', $kaprog->id_kaprog)
            ->get();


            return view('operator.kaprog.detailkaprog', ["detail" => $detail]);
    }

    public function hapuskaprog($id = null)
    {
        try{
            $hapuskaprog = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            if($hapuskaprog){
                return redirect('/operator/kaprog');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
