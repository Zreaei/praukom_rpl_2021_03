<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use App\Models\{UserModel,WkhubinModel};
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminWkhubinController extends Controller
{
    protected $WkhubinModel;
    protected $UserModel;

    public function __construct()
    {
        $this->WkhubinModel = new WkhubinModel;
        $this->UserModel = new UserModel;
    }

    public function wkhubin()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataWkhubin = DB::table('waka_hubin')
        ->join('user', 'user.id_user', '=', 'waka_hubin.user')
        ->get();
        return view('admin.data-wkhubin.data-wkhubin', compact('dataWkhubin','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nip_wkhubin' => 'required',
            'nama_wkhubin' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $id_wkhubin = DB::select('SELECT newidwkhubin() AS id_wkhubin');
            $array = Arr::pluck($id_wkhubin, 'id_wkhubin');
            $kode_baru = Arr::get($array, '0');
            $tambah_wkhubin = DB::table('waka_hubin')->insert([
            'id_wkhubin' => $kode_baru,
            'nip_wkhubin' => $request->input('nip_wkhubin'),
            'nama_wkhubin' => $request->input('nama_wkhubin'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

        //Promise 
        if ($tambah_wkhubin) {
            sweetalert()->addSuccess('Waka Hubin Berhasil Ditambah');
            return redirect('admin/data-wkhubin');
        } else {
            sweetalert()->addSuccess('Waka Hubin Gagal Ditambah');
            return redirect('admin/data-wkhubin');
        }

        } else {
            sweetalert()->addSuccess('Waka Hubin Gagal Ditambah');
            return redirect('admin/data-wkhubin');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nip_wkhubin' => 'required',
            'nama_wkhubin' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nip_wkhubin' => $request->input('nip_wkhubin'),
                'nama_wkhubin' => $request->input('nama_wkhubin'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->WkhubinModel
                        ->where('id_wkhubin', $request->input('id_wkhubin'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Waka Hubin Berhasil Di Edit');
                return redirect('admin/data-wkhubin');
            } else {
                sweetalert()->addSuccess('Waka Hubin Gagal Di Edit');
                return redirect('admin/data-wkhubin');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->WkhubinModel
                            ->where('id_wkhubin',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Waka Hubin Berhasil Dihapus');
                return redirect('admin/data-wkhubin');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
