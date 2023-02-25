<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{PbsekolahModel,UserModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminPbsekolahController extends Controller
{
    protected $PbsekolahModel;
    protected $UserModel;

    public function __construct()
    {
        $this->PbsekolahModel = new PbsekolahModel;
        $this->UserModel = new UserModel;
    }

    public function pbsekolah()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataPbsekolah = DB::table('pb_sekolah')
        ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
        ->get();
        return view('admin.data-pbsekolah.data-pbsekolah', compact('dataPbsekolah','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nip_pbsekolah' => 'required',
            'nama_pbsekolah' => 'required',
            'telp_pbsekolah' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $id_pbsekolah = DB::select('SELECT newidpbsekolah() AS id_pbsekolah');
            $array = Arr::pluck($id_pbsekolah, 'id_pbsekolah');
            $kode_baru = Arr::get($array, '0');
            $tambah_pbsekolah = DB::table('pb_sekolah')->insert([
            'id_pbsekolah' => $kode_baru,
            'nip_pbsekolah' => $request->input('nip_pbsekolah'),
            'nama_pbsekolah' => $request->input('nama_pbsekolah'),
            'telp_pbsekolah' => $request->input('telp_pbsekolah'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

        //Promise 
        if ($tambah_pbsekolah) {
            sweetalert()->addSuccess('Pembimbing Sekolah Berhasil Ditambah');
            return redirect('admin/data-pbsekolah');
        } else {
            sweetalert()->addSuccess('Pembimbing Sekolah Gagal Ditambah');
            return redirect('admin/data-pbsekolah');
        }

        } else {
            sweetalert()->addSuccess('Pembimbing Sekolah Gagal Ditambah');
            return redirect('admin/data-pbsekolah');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nip_pbsekolah' => 'required',
            'nama_pbsekolah' => 'required',
            'telp_pbsekolah' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nip_pbsekolah' => $request->input('nip_pbsekolah'),
                'nama_pbsekolah' => $request->input('nama_pbsekolah'),
                'telp_pbsekolah' => $request->input('telp_pbsekolah'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->PbsekolahModel
                        ->where('id_pbsekolah', $request->input('id_pbsekolah'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Pembimbing Sekolah Berhasil Di Edit');
                return redirect('admin/data-pbsekolah');
            } else {
                sweetalert()->addSuccess('Pembimbing Sekolah Gagal Di Edit');
                return redirect('admin/data-pbsekolah');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->PbsekolahModel
                            ->where('id_pbsekolah',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Pembimbing Sekolah Berhasil Dihapus');
                return redirect('admin/data-pbsekolah');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
