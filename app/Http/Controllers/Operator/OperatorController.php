<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Error;
=======
use App\Models\AdmkeuModel;
use App\Models\UserModel;
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
use Exception;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
<<<<<<< HEAD
    public function home()
    {
        return view('operator.home');
    }
<<<<<<< HEAD
    public function profile() 
    {
        return view('operator.profile');
    }
    protected $siswaModel;
=======
}
=======
    protected $UserModel;
    protected $AdmkeuModel;

>>>>>>> 844d1b5c9919d052d3f3fb061b00fb399a1769ac
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->AdmkeuModel = new AdmkeuModel;
    }
    
    public function index()
    {
        return view('operator.home');
    }

    public function admkeu()
    {
        $daftar = $this->AdmkeuModel::all();
        return view('operator.admkeu.admkeu', compact('daftar'));
    }

    public function tambahadmkeu()
    {
        $user = $this->UserModel::all();
        return view('operator.admkeu.tambahadmkeu', compact('user'));
    }

    public function simpan(Request $request)
    {
        try {
            $data = [
                'user' => $request->input('user'),
                // 'user' => substr(md5(rand(0, 99999)), -4),
                'nama_admkeu' => $request->input('nama_admkeu'),
                // dd($request->all())
            ];
<<<<<<< HEAD


    // protected $siswaModel;
    // public function __construct()
    // {
    //     $this->siswaModel = new SiswaModel;
    // }
    // public function siswa() 
    // {
    //     return view('operator.siswa');
    //     $data = [
    //         'title' => 'Daftar Siswa',
    //         'siswa' => $this->siswaModel->all()
    //     ];
    //     return view('operator.siswa', $data);
    // }
    // public function tambahsiswa()
    // {
    //     return view('operator.tambahSiswa');
    // }
    // public function simpansiswa(Request $request)
    // {
    //     try {
    //         $data = [
    //             'nis' => $request->input('nis'),
    //             'id_user' => $request->input('id_user'),
    //             'kelas' => $request->input('kelas'),
    //             'nama_siswa' => $request->input('nama_siswa'),
    //             'tempat_lahir' => $request->input('tempat_lahir'),
    //             'tgl_lahir' => $request->input('tgl_lahir'),
    //             'telp_siswa' => $request->input('telp_siswa')
    //         ];

    //         $nis = substr(md5(rand(0, 99999)), -4);
    //         $data['nis'] = $nis;
    //         $insert = $this->siswaModel->create($data);
    //         if ($insert) {
    //             return redirect('operator.siswa');
    //         } else {
    //             return "input data gagal";
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function editsiswa($id = null)
    // {

    //     $edit = $this->siswaModel->find($id);
    //     return view('operator.editSiswa', $edit);
    // }
    // public function editsimpansiswa(Request $request)
    // {
    //     try {
    //         $data = [
    //             'nis' => $request->input('nis'),
    //             'id_user' => $request->input('id_user'),
    //             'kelas' => $request->input('kelas'),
    //             'nama_siswa' => $request->input('nama_siswa'),
    //             'tempat_lahir' => $request->input('tempat_lahir'),
    //             'tgl_lahir' => $request->input('tgl_lahir'),
    //             'telp_siswa' => $request->input('telp_siswa')
    //         ];

    //         $upd = $this->siswaModel
    //                     ->where('nis', $request->input('nis'))
    //                     ->update($data);
    //         if($upd){
    //             return redirect('nis');
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function hapusSiswa($id=null){
    //     try{
    //         $hapus = $this->siswaModel
    //                         ->where('nis',$id)
    //                         ->delete();
    //         if($hapus){
    //             return redirect('operator.siswa');
    //         }
    //     }catch(Exception $e){
    //         $e->getMessage();
    //     }
    // }

    public function walas() 
    {
        return view('operator.walas');
=======
         
            $id_admkeu = substr(md5(rand(0, 99999)), -4);
            $data['id_admkeu'] = $id_admkeu;
            $insert = $this->AdmkeuModel->create($data);
            //Promise 
            if ($insert) {
                return redirect('operator/admkeu');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
>>>>>>> 844d1b5c9919d052d3f3fb061b00fb399a1769ac
    }

    public function edit($id = null)
    {

        $edit = $this->AdmkeuModel->find($id);
        return view('operator.admkeu.editadmkeu', $edit);
    }
    
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_admkeu'   => $request->input('nama_admkeu'),
            ];
            $upd = $this->AdmkeuModel
                        ->where('id_admkeu', $request->input('id_admkeu'))
                        ->update($data);
            if($upd){
                return redirect('operator/admkeu');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id=null){
        try{
            $hapus = $this->AdmkeuModel
                            ->where('id_admkeu',$id)
                            ->delete();
            if($hapus){
                return redirect('operator/admkeu');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    

}


// class OperatorController extends Controller
// {
//     public function home() 
//     {
//         return view('operator.home');
//     }
//     public function profile() 
//     {
//         return view('operator.profile');
//     }
    
//     protected $siswaModel;
//     public function __construct()
//     {
//         $this->siswaModel = new SiswaModel;
//     }
//     public function siswa() 
//     {
       
//         $data = [
//             'title' => 'Daftar Siswa',
//             'siswa' => $this->siswaModel->all()
//         ];
//         return view('operator.siswa', $data);
//     }
//     public function tambahsiswa()
//     {
//         return view('operator.tambahSiswa');
//     }
//     public function simpansiswa(Request $request)
//     {
//         try {
//             $data = [
//                 'nis' => $request->input('nis'),
//                 'id_user' => $request->input('id_user'),
//                 'kelas' => $request->input('kelas'),
//                 'nama_siswa' => $request->input('nama_siswa'),
//                 'tempat_lahir' => $request->input('tempat_lahir'),
//                 'tgl_lahir' => $request->input('tgl_lahir'),
//                 'telp_siswa' => $request->input('telp_siswa')
//             ];
//         }
//     }
//     // protected $siswaModel;
//     // public function __construct()
//     // {
//     //     $this->siswaModel = new SiswaModel;
//     // }
//     // public function siswa() 
//     // {
//     //     return view('operator.siswa');
//     //     $data = [
//     //         'title' => 'Daftar Siswa',
//     //         'siswa' => $this->siswaModel->all()
//     //     ];
//     //     return view('operator.siswa', $data);
//     // }
//     // public function tambahsiswa()
//     // {
//     //     return view('operator.tambahSiswa');
//     // }
//     // public function simpansiswa(Request $request)
//     // {
//     //     try {
//     //         $data = [
//     //             'nis' => $request->input('nis'),
//     //             'id_user' => $request->input('id_user'),
//     //             'kelas' => $request->input('kelas'),
//     //             'nama_siswa' => $request->input('nama_siswa'),
//     //             'tempat_lahir' => $request->input('tempat_lahir'),
//     //             'tgl_lahir' => $request->input('tgl_lahir'),
//     //             'telp_siswa' => $request->input('telp_siswa')
//     //         ];

//     //         $nis = substr(md5(rand(0, 99999)), -4);
//     //         $data['nis'] = $nis;
//     //         $insert = $this->siswaModel->create($data);
//     //         if ($insert) {
//     //             return redirect('operator.siswa');
//     //         } else {
//     //             return "input data gagal";
//     //         }
//     //     } catch (Exception $e) {
//     //         return $e->getMessage();
//     //     }
//     // }

//     // public function editsiswa($id = null)
//     // {

//     //     $edit = $this->siswaModel->find($id);
//     //     return view('operator.editSiswa', $edit);
//     // }
//     // public function editsimpansiswa(Request $request)
//     // {
//     //     try {
//     //         $data = [
//     //             'nis' => $request->input('nis'),
//     //             'id_user' => $request->input('id_user'),
//     //             'kelas' => $request->input('kelas'),
//     //             'nama_siswa' => $request->input('nama_siswa'),
//     //             'tempat_lahir' => $request->input('tempat_lahir'),
//     //             'tgl_lahir' => $request->input('tgl_lahir'),
//     //             'telp_siswa' => $request->input('telp_siswa')
//     //         ];

//     //         $upd = $this->siswaModel
//     //                     ->where('nis', $request->input('nis'))
//     //                     ->update($data);
//     //         if($upd){
//     //             return redirect('nis');
//     //         }
//     //     } catch (Exception $e) {
//     //         return $e->getMessage();
//     //     }
//     // }

//     // public function hapusSiswa($id=null){
//     //     try{
//     //         $hapus = $this->siswaModel
//     //                         ->where('nis',$id)
//     //                         ->delete();
//     //         if($hapus){
//     //             return redirect('operator.siswa');
//     //         }
//     //     }catch(Exception $e){
//     //         $e->getMessage();
//     //     }
//     // }

//     public function walas()
//     {
        
//     }

//     // public function admkeu()
//     // {
//     //     $admkeu = $this->AdmkeuModel::all();
//     //     return view('operator.admkeu', compact('daftar'));
//     // }

//     public function kaprog()
//     {
//         return view('operator.kaprog');
//     }
//     public function wkhubin() 
//     {
//         return view('operator.wkhubin');
//     }
//     public function pbsekolah() 
//     {
//         return view('operator.pbsekolah');
//     }
//     public function pbiduka() 
//     {
//         return view('operator.pbiduka');
//     }
//     public function verifikator() 
//     {
//         return view('operator.verifikator');
//     }
//     public function kelas() 
//     {
//         return view('operator.kelas');
//     }
//     public function jurusan() 
//     {
//         return view('operator.jurusan');
//     }
//     public function pengajuan() 
//     {
//         return view('operator.pengajuan');
//     }
//     public function monitoring() 
//     {
//         return view('operator.monitoring');
//     }
//     public function prakerin() 
//     {
//         return view('operator.prakerin');
//     }
// }
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
