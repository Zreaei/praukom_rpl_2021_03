<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\WkhubinModel;
use App\Models\UserModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataWkhubinController extends Controller
{
    protected $WkhubinModel, $UserModel;
    public function __construct()
    {
        $this->WkhubinModel = new WkhubinModel();
        $this->UserModel = new UserModel();
    }
    public function wkhubin() 
    {
        $wkhubin = DB::table('waka_hubin')
            ->join('user', 'user.id_user', '=', 'waka_hubin.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

            return view('operator.wkhubin.wkhubin')->with('wkhubin', $wkhubin);
    }
    public function tambahwkhubin()
    {
        $wkhubin = $this->WkhubinModel::all();
        return view('operator.wkhubin.tambahwkhubin', compact('wkhubin'));
    }
    public function simpanwkhubin(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'level' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'nip_wkhubin' => 'required',
            'user' => 'required',
            'nama_wkhubin' => 'required',
        ]);

        $user = [
            'id_user' => $request->id_user,
            'level' => $request->level,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email
        ];

        $wkhubin = [
            'nip_wkhubin' => $request->nip_wkhubin,
            'user' => $request->user,
            'nama_wkhubin' => $request->nama_wkhubin
        ];
            try {
                $id_user = $this->UserModel->create($user);
                $wkhubin['id_user'] = $id_user;
                $this->WkhubinModel->create($wkhubin);                
                return redirect('/operator/wkhubin')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/operator/wkhubin')->with('error', 'Data gagal ditambah');
            }
    }
    public function editwkhubin($id = null)
    {
        $edit = $this->WkhubinModel->find($id);
        return view('operator.wkhubin.editwkhubin', $edit);
    }
    public function editsimpanwkhubin(Request $request)
    {
        try {
            $data = [
                'nama_wkhubin' => $request->input('nama_wkhubin')
            ];

            $upd = $this->WkhubinModel
                        ->where('nip_wkhubin', $request->input('nip_wkhubin'))
                        ->update($data);
            if($upd){
                return redirect('/operator/wkhubin');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        } finally {
            return redirect('/operator/wkhubin');
        }
    }

    public function hapususer($id = null)
    {
        try{
            $hapususer = $this->UserModel->where('id_user',$id)->delete();
            if($hapususer){
                return redirect('/operator/wkhubin');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}