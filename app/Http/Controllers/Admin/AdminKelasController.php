<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    KelasModel,WalasModel,
    JurusanModel,AngkatanModel
};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminKelasController extends Controller
{
    protected $KelasModel;
    protected $WalasModel;
    protected $JurusanModel;
    protected $AngkatanModel;
    
    public function __construct()
    {
        $this->KelasModel = new KelasModel;
        $this->WalasModel = new WalasModel;
        $this->JurusanModel = new JurusanModel;
        $this->AngkatanModel = new AngkatanModel;
    }
    
    public function kelas()
    {
        $walas = $this->WalasModel::all();
        $jurusan = $this->JurusanModel::all();
        $angkatan = $this->AngkatanModel::all();
        $dataKelas = DB::table('kelas') 
        ->join('walas', 'walas.id_walas', '=', 'kelas.walas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
        ->get();    
        // dd($dataKelas);
        return view('admin.data-kelas.data-kelas', compact('dataKelas','walas','jurusan','angkatan'));
    }

    public function simpan(Request $request)
    {
        try {
            $id_kelas = DB::select('SELECT newidkelas() AS id_kelas');
            $array = Arr::pluck($id_kelas, 'id_kelas');
            $kode_baru = Arr::get($array, '0');
            $tambah_kelas = DB::table('kelas')->insert([
                'id_kelas' => $kode_baru,
                'walas' => $request->input('walas'),
                'angkatan' => $request->input('angkatan'),
                'jurusan' => $request->input('jurusan'),
                'tingkatan' => $request->input('tingkatan'),
                'nama_kelas' => $request->input('nama_kelas'),
            ]);
            if ($tambah_kelas) {
                return redirect('admin/data-kelas');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // public function edit($id = null)
    // {
    //     $edit = $this->KelasModel->find($id);
    //     $walas = $this->WalasModel::all();
    //     $jurusan = $this->JurusanModel::all();
    //     $angkatan = $this->AngkatanModel::all();
    //     // echo json_encode($edit);
    //     return view('admin.data-kelas.editkelas', compact('edit','walas','jurusan','angkatan'));
    // }

    public function simpanedit(Request $request)
    {
        try {
            $data = [
                'walas' => $request->input('walas'),
                'angkatan' => $request->input('angkatan'),
                'jurusan' => $request->input('jurusan'),
                'tingkatan' => $request->input('tingkatan'),
                'nama_kelas' => $request->input('nama_kelas'),
                // dd($request->all())
            ];
            $upd = $this->KelasModel
                        ->where('id_kelas', $request->input('id_kelas'))
                        ->update($data);
            if($upd){
                return redirect('admin/data-kelas');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->KelasModel
                            ->where('id_kelas',$id)
                            ->delete();
            if($hapus){
                return redirect('admin/data-kelas');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}

