<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{UserModel,WalasModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminWalasController extends Controller
{
    protected $WalasModel;
    protected $UserModel;

    public function __construct()
    {
        $this->WalasModel = new WalasModel;
        $this->UserModel = new UserModel;
    }

    public function walas()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataWalas = DB::table('walas')
        ->join('user', 'user.id_user', '=', 'walas.user')
        ->get();
        return view('admin.data-walas.data-walas', compact('dataWalas','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nip_walas' => 'required',
            'nama_walas' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $id_walas = DB::select('SELECT newidwalas() AS id_walas');
            $array = Arr::pluck($id_walas, 'id_walas');
            $kode_baru = Arr::get($array, '0');
            $tambah_walas = DB::table('walas')->insert([
            'id_walas' => $kode_baru,
            'nip_walas' => $request->input('nip_walas'),
            'nama_walas' => $request->input('nama_walas'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

        //Promise 
        if ($tambah_walas) {
            sweetalert()->addSuccess('Walas Berhasil Ditambah');
            return redirect('admin/data-walas');
        } else {
            sweetalert()->addSuccess('Walas Gagal Ditambah');
            return redirect('admin/data-walas');
        }

        } else {
            sweetalert()->addSuccess('Walas Gagal Ditambah');
            return redirect('admin/data-walas');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nip_walas' => 'required',
            'nama_walas' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nip_walas' => $request->input('nip_walas'),
                'nama_walas' => $request->input('nama_walas'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->WalasModel
                        ->where('id_walas', $request->input('id_walas'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Walas Berhasil Di Edit');
                return redirect('admin/data-walas');
            } else {
                sweetalert()->addSuccess('Walas Gagal Di Edit');
                return redirect('admin/data-walas');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->WalasModel
                            ->where('id_walas',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Walas Berhasil Dihapus');
                return redirect('admin/data-walas');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
