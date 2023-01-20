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

    public function tambahAngkatan()
    {
        return view('admin.data-angkatan.tambahangkatan');
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
                return redirect('admin/data-angkatan');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->AngkatanModel->find($id);
        // echo json_encode($edit);
        return view('admin.data-angkatan.editangkatan', compact('edit'));
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
                return redirect('admin/data-angkatan');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
