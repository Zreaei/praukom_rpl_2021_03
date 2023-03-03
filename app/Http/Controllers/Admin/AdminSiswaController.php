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
        $validasi = $request->validate([
            'nis' => 'required|unique:siswa',
            'user' => 'required',
            'kelas' => 'required',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telp_siswa' => 'required',
        ]);

        if ($validasi) {
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
                sweetalert()->addSuccess('Siswa Berhasil Ditambah');
                return redirect('admin/data-siswa');
            } else {
                sweetalert()->addError('Siswa Gagal Ditambah');
                return redirect('admin/data-siswa');
            }
        } else {
            sweetalert()->addError('Siswa Gagal Ditambah');
            return redirect('admin/data-siswa');
        }
    }

    public function simpanedit(Request $request)
    {       
        $validasi = $request->validate([
            'nis' => 'required',
            'user' => 'required',
            'kelas' => 'required',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telp_siswa' => 'required',
        ]);

        if ($validasi) {
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
                sweetalert()->addSuccess('Siswa Berhasil Diedit');
                return redirect('admin/data-siswa');
            } else {
                sweetalert()->addError('Siswa Gagal Diedit');
                return redirect('admin/data-siswa');
            }
        } else {
            sweetalert()->addError('Siswa Gagal Diedit');
            return redirect('admin/data-siswa');
        }
    }

    public function hapus($id = null)
    {
        $hapus = $this->SiswaModel
                        ->where('nis',$id)
                        ->delete();
        if($hapus){
            sweetalert()->addSuccess('Siswa Berhasil Dihapus');
            return redirect('admin/data-siswa');
        } else {
            sweetalert()->addError('Siswa Gagal Dihapus');
            return redirect('admin/data-siswa');
        }
    }
}
