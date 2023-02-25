<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{UserModel, KelasModel, SiswaModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSiswaController extends Controller
{
    protected $SiswaModel;
    protected $UserModel;
    protected $KelasModel;

    public function __construct()   
    {
        $this->SiswaModel = new SiswaModel;
        $this->UserModel = new UserModel;
        $this->KelasModel = new KelasModel;
    }

    public function siswa()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $kelas = DB::table('kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
        ->get(); 
        $dataSiswa = DB::table('siswa') 
        ->join('user', 'user.id_user', '=', 'siswa.user')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
        ->get(); 
        return view('admin.data-siswa.data-siswa', compact('dataSiswa','user','kelas'));
    }

    public function simpan(Request $request)
    {
        try {
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
