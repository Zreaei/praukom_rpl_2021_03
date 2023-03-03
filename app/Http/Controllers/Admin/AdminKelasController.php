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
        $validasi = $request->validate([
            'walas' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'tingkatan' => 'required',
            'nama_kelas' => 'required',
            // dd($request->all())
        ]);
        
        if ($validasi) {
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
                sweetalert()->addSuccess('Kelas Berhasil Ditambah');
                return redirect('admin/data-kelas');
            } else {
                sweetalert()->addError('Kelas Gagal Ditambah');
                return redirect('admin/data-kelas');
            }

        } else {
            sweetalert()->addError('Kelas Gagal Ditambah');
            return redirect('admin/data-kelas');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'walas' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'tingkatan' => 'required',
            'nama_kelas' => 'required',
        ]);
        
        if ($validasi) {
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
                sweetalert()->addSuccess('Kelas Berhasil Di Edit');
                return redirect('admin/data-kelas');
            } else {
                sweetalert()->addError('User Gagal Di Edit');
                return redirect('admin/data-kelas');
            }
            
        } else {
            sweetalert()->addError('User Gagal Di Edit');
            return redirect('admin/data-kelas');
        }
    }

    public function hapus($id = null) 
    {
        $hapus = $this->KelasModel
                        ->where('id_kelas',$id)
                        ->delete();
        if($hapus){
            sweetalert()->addSuccess('Kelas Berhasil DiHapus');
            return redirect('admin/data-kelas');
        } else {
            sweetalert()->addError('User Gagal DiHapus');
            return redirect('admin/data-kelas');
        }
    } 
}

