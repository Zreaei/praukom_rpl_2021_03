<?php

namespace App\Http\Controllers\Admin;

use App\Models\{VerifikatorModel,UserModel};
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminVerifikatorController extends Controller
{
    protected $VerifikatorModel;
    protected $UserModel;

    public function __construct()
    {
        $this->VerifikatorModel = new VerifikatorModel;
        $this->UserModel = new UserModel;
    }

    public function verifikator()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataVerifikator = DB::table('verifikator')
        ->join('user', 'user.id_user', '=', 'verifikator.user')
        ->get();
        return view('admin.data-verifikator.data-verifikator', compact('dataVerifikator','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nip_verifikator' => 'required',
            'nama_verifikator' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $id_verifikator = DB::select('SELECT newidverifikator() AS id_verifikator');
            $array = Arr::pluck($id_verifikator, 'id_verifikator');
            $kode_baru = Arr::get($array, '0');
            $tambah_verifikator = DB::table('verifikator')->insert([
            'id_verifikator' => $kode_baru,
            'nip_verifikator' => $request->input('nip_verifikator'),
            'nama_verifikator' => $request->input('nama_verifikator'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

        //Promise 
        if ($tambah_verifikator) {
            sweetalert()->addSuccess('Verifikator Berhasil Ditambah');
            return redirect('admin/data-verifikator');
        } else {
            sweetalert()->addSuccess('Verifikator Gagal Ditambah');
            return redirect('admin/data-verifikator');
        }

        } else {
            sweetalert()->addSuccess('Verifikator Gagal Ditambah');
            return redirect('admin/data-verifikator');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nip_verifikator' => 'required',
            'nama_verifikator' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nip_verifikator' => $request->input('nip_verifikator'),
                'nama_verifikator' => $request->input('nama_verifikator'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->VerifikatorModel
                        ->where('id_verifikator', $request->input('id_verifikator'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Verifikator Berhasil Di Edit');
                return redirect('admin/data-verifikator');
            } else {
                sweetalert()->addSuccess('Verifikator Gagal Di Edit');
                return redirect('admin/data-verifikator');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->VerifikatorModel
                            ->where('id_verifikator',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Verifikator Berhasil Dihapus');
                return redirect('admin/data-verifikator');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
