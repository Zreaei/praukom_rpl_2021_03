<?php

namespace App\Http\Controllers\Admin;

use App\Models\AngkatanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DataAngkatanController extends Controller
{
    protected $AngkatanModel;

    public function __construct()
    {
        $this->AngkatanModel = new AngkatanModel;
    }

    public function angkatan()
    {
        $dataAngkatan = $this->AngkatanModel::all();
        return view('admin.data-angkatan.data-angkatan', compact('dataAngkatan'));
    }

    public function simpan(Request $request)
    {
        try {
            $id_angkatan = DB::select('SELECT newidangkatan() AS id_angkatan');
            $array = Arr::pluck($id_angkatan, 'id_angkatan');
            $kode_baru = Arr::get($array, '0');
            $tambah_angkatan = DB::table('angkatan')->insert([
                'id_angkatan' => $kode_baru,
                'tahun_angkatan' => $request->input('tahun_angkatan'),
            ]);
            if ($tambah_angkatan) {
                sweetalert()->addSuccess('Angkatan Berhasil Ditambah');
                return redirect('admin/data-angkatan');
            } else {
                sweetalert()->addSuccess('Angkatan Gagal Ditambah');
                return redirect('admin/data-angkatan');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function simpanedit(Request $request)
    {
        try {
            $data = [
                'tahun_angkatan' => $request->input('tahun_angkatan'),
                // dd($request->all())
            ];
            $upd = $this->AngkatanModel
                        ->where('id_angkatan', $request->input('id_angkatan'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Angkatan Berhasil Di Edit');
                return redirect('admin/data-angkatan');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id = null)
    {
        try{
            $hapus = $this->AngkatanModel
                            ->where('id_angkatan',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Angkatan Berhasil Dihapus');
                return redirect('admin/data-angkatan');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
