<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{PbidukaModel,UserModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPbidukaController extends Controller
{
    protected $PbidukaModel;
    protected $UserModel;

    public function __construct()
    {
        $this->PbidukaModel = new PbidukaModel;
        $this->UserModel = new UserModel;
    }

    public function pbiduka()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataPbiduka = DB::table('pb_iduka')
        ->join('user', 'user.id_user', '=', 'pb_iduka.user')
        ->get();
        return view('admin.data-pbiduka.data-pbiduka', compact('dataPbiduka','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nik' => 'required',
            'nama_pbiduka' => 'required',
            'telp_pbiduka' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $tambah_pbiduka = DB::table('pb_iduka')->insert([
            'nik' => $request->input('nik'),
            'nama_pbiduka' => $request->input('nama_pbiduka'),
            'telp_pbiduka' => $request->input('telp_pbiduka'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

        //Promise 
        if ($tambah_pbiduka) {
            sweetalert()->addSuccess('Pembimbing Iduka Berhasil Ditambah');
            return redirect('admin/data-pbiduka');
        } else {
            sweetalert()->addSuccess('Pembimbing Iduka Gagal Ditambah');
            return redirect('admin/data-pbiduka');
        }

        } else {
            sweetalert()->addSuccess('Pembimbing Iduka Gagal Ditambah');
            return redirect('admin/data-pbiduka');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nik' => 'required',
            'nama_pbiduka' => 'required',
            'telp_pbiduka' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nik' => $request->input('nik'),
                'nama_pbiduka' => $request->input('nama_pbiduka'),
                'telp_pbiduka' => $request->input('telp_pbiduka'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->PbidukaModel
                        ->where('nik', $request->input('nik'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Pembimbing Iduka Berhasil Di Edit');
                return redirect('admin/data-pbiduka');
            } else {
                sweetalert()->addSuccess('Pembimbing Iduka Gagal Di Edit');
                return redirect('admin/data-pbiduka');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->PbidukaModel
                            ->where('nik',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Pembimbing Iduka Berhasil Dihapus');
                return redirect('admin/data-pbiduka');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
