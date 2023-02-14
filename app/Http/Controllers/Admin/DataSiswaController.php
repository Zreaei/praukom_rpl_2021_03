<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiswaModel;
use App\Models\{UserModel, KelasModel, JurusanModel, AngkatanModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSiswaController extends Controller
{
    protected $SiswaModel;
    protected $UserModel;
    protected $KelasModel;
    protected $JurusanModel;
    protected $AngkatanModel;

    public function __construct()   
    {
        $this->SiswaModel = new SiswaModel;
        $this->UserModel = new UserModel;
        $this->KelasModel = new KelasModel;
        $this->JurusanModel = new JurusanModel;
        $this->AngkatanModel = new AngkatanModel;
    }

    public function siswa()
    {
        $dataSiswa = DB::table('siswa') 
        // ->join('kaprog', 'kaprog.nip_kaprog', '=', 'jurusan.kaprog')
        ->get(); 
        return view('admin.data-siswa.data-siswa', compact('dataSiswa'));
    }

    public function tambahSiswa()
    {
        // $user = $this->UserModel::all();
        // $kelas = $this->KelasModel::all();
        // return view('admin.data-siswa.tambahsiswa', compact('user','kelas'));

        $dataSiswa = DB::table('siswa')
        ->join('user', 'user.id_user', '=', 'siswa.user')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
        ->get();

        return view('admin.data-siswa.tambahsiswa')->with('dataSiswa', $dataSiswa);
    }

    public function simpan(Request $request)
    {
        try {
            // $id_jurusan = DB::select('SELECT newidjurusan() AS id_jurusan');
            // $array = Arr::pluck($id_jurusan, 'id_jurusan');
            // $kode_baru = Arr::get($array, '0');
            $tambah_siswa = DB::table('siswa')->insert([
                'nis' => $request->input('nis'),
                'user' => $request->input('user'),
                'kelas' => $request->input('kelas'),
                'nama_siswa' => $request->input('nama_siswa'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'telp_siswa' => $request->input('telp_siswa'),
            ]);
            if ($tambah_siswa) {
                return redirect('admin/data-siswa');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->SiswaModel->find($id);
        $user = $this->UserModel::all();
        $kelas = $this->KelasModel::all();
        // echo json_encode($edit);
        return view('admin.data-siswa.editsiswa', compact('edit','user','kelas'));
    }

    public function simpanedit(Request $request)
    {
        try {
            $data = [
                'user' => $request->input('user'),
                'kelas' => $request->input('kelas'),
                'nama_siswa' => $request->input('nama_siswa'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'telp_siswa' => $request->input('telp_siswa'),
                // dd($request->all())
            ];
            $upd = $this->SiswaModel
                        ->where('nis', $request->input('nis'))
                        ->update($data);
            if($upd){
                return redirect('admin/data-siswa');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id = null)
    {
        try{
            $hapus = $this->SiswaModel
                            ->where('nis',$id)
                            ->delete();
            if($hapus){
                return redirect('admin/data-siswa');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
