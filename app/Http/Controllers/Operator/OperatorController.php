<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Error;
use Exception;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function home() 
    {
        return view('operator.home');
    }
    public function profile() 
    {
        return view('operator.profile');
    }
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel;
    }
    public function siswa() 
    {
       
        $data = [
            'title' => 'Daftar Siswa',
            'siswa' => $this->siswaModel->all()
        ];
        return view('operator.siswa', $data);
    }
    public function tambahsiswa()
    {
        return view('operator.tambahSiswa');
    }
    public function simpansiswa(Request $request)
    {
        try {
            $data = [
                'nis' => $request->input('nis'),
                'id_user' => $request->input('id_user'),
                'kelas' => $request->input('kelas'),
                'nama_siswa' => $request->input('nama_siswa'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'telp_siswa' => $request->input('telp_siswa')
            ];

            $nis = substr(md5(rand(0, 99999)), -4);
            $data['nis'] = $nis;
            $insert = $this->siswaModel->create($data);
            if ($insert) {
                return redirect('operator.siswa');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editsiswa($id = null)
    {

        $edit = $this->siswaModel->find($id);
        return view('operator.editSiswa', $edit);
    }
    public function editsimpansiswa(Request $request)
    {
        try {
            $data = [
                'nis' => $request->input('nis'),
                'id_user' => $request->input('id_user'),
                'kelas' => $request->input('kelas'),
                'nama_siswa' => $request->input('nama_siswa'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'telp_siswa' => $request->input('telp_siswa')
            ];

            $upd = $this->siswaModel
                        ->where('nis', $request->input('nis'))
                        ->update($data);
            if($upd){
                return redirect('nis');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapusSiswa($id=null){
        try{
            $hapus = $this->siswaModel
                            ->where('nis',$id)
                            ->delete();
            if($hapus){
                return redirect('operator.siswa');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    public function walas() 
    {
        return view('operator.walas');
    }
    public function admkeu() 
    {
        return view('operator.admkeu');
    }
    public function kaprog() 
    {
        return view('operator.kaprog');
    }
    public function wkhubin() 
    {
        return view('operator.wkhubin');
    }
    public function pbsekolah() 
    {
        return view('operator.pbsekolah');
    }
    public function pbiduka() 
    {
        return view('operator.pbiduka');
    }
    public function verifikator() 
    {
        return view('operator.verifikator');
    }
    public function kelas() 
    {
        return view('operator.kelas');
    }
    public function jurusan() 
    {
        return view('operator.jurusan');
    }
    public function pengajuan() 
    {
        return view('operator.pengajuan');
    }
    public function monitoring() 
    {
        return view('operator.monitoring');
    }
    public function prakerin() 
    {
        return view('operator.prakerin');
    }
}
