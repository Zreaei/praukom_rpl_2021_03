<?php

namespace App\Http\Controllers\pbsekolah;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PbsekolahMainController extends Controller
{

    public function prakerin() 
    {
        $prakerin = DB::table('prakerin')
            ->join('pengajuan', 'pengajuan.id_pengajuan', '=', 'prakerin.pengajuan')
            ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
            ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->get();

            return view('pbsekolah.prakerin')->with('prakerin', $prakerin);
    }

    public function presensi()
    {
        $presensi = DB::table('presensi')
            ->join('prakerin', 'prakerin.id_prakerin', '=', 'presensi.prakerin')
            ->join('pb_iduka', 'pb_iduka.nik', '=', 'presensi.pb_iduka')
            ->join('pb_sekolah', 'pb_sekolah.id_pbsekolah', '=', 'presensi.pb_sekolah')
            ->get();

            return view('pbsekolah.presensi')->with('presensi', $presensi);
    }

    public function kegiatan()
    {
        $kegiatan = DB::table('kegiatan')->get();

            return view('pbsekolah.kegiatan')->with('kegiatan', $kegiatan);
    }

    // LANJUT LAGI !!!
    public function monitoring()
    {
        $monitoring = DB::table('monitoring')
            ->join('pb_sekolah', 'pb_sekolah.id_pbsekolah', '=', 'monitoring.pb_sekolah')
            ->join('prakerin', 'prakerin.id_prakerin', '=', 'monitoring.prakerin')
            ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'prakerin.iduka')
            ->get();

            return view('pbsekolah.monitoring')->with('monitoring', $monitoring);
    }

    // public function tambahpbsekolah(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'level' => 'required',
    //             'username' => 'required',
    //             'password' => 'required',
    //             'email' => 'required',
    //             'foto_user' => 'required',
    //             'nip_pbsekolah' => 'required',
    //             'nama_pbsekolah' => 'required',
    //             'telp_pbsekolah' => 'required'
    //         ]
    //     );

    //     $img = $request->file('foto_user')->store('img');
    //     $pass = Hash::make($request->input('password'));

    //     DB::insert("CALL procedure_insert_pbsekolah(
    //         :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanip_pbsekolah, :datanama_pbsekolah, :datatelp_pbsekolah)",
    //         [
    //             'datalevel' => $request->level,
    //             'datausername' => $request->username,
    //             'datapassword' => $pass,
    //             'dataemail' => $request->email,
    //             'datafoto_user' => $img,
    //             'datanip_pbsekolah' => $request->nip_pbsekolah,
    //             'datanama_pbsekolah' => $request->nama_pbsekolah,
    //             'datatelp_pbsekolah' => $request->telp_pbsekolah
    //         ]
    //     );

    //     return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil ditambah');
    // }

    // public function editpbsekolah(PbsekolahModel $pbsekolah)
    // {
    //     $edit = DB::table('pb_sekolah')
    //         ->join('user', 'user.id_user', '=', 'pb_sekolah.user')
    //         ->join('level_user', 'level_user.id_level', '=', 'user.level')
    //         ->select('pb_sekolah.*', 'user.*', 'level_user.*')
    //         ->where('id_pbsekolah', '=', $pbsekolah->id_pbsekolah)
    //         ->get();

    //         return view('operator.pbsekolah.editpbsekolah', ["edit" => $edit]);
    // }

    // public function editsimpanpbsekolah(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'username' => 'required',
    //             'password' => 'required',
    //             'email' => 'required',
    //             'foto_user' => 'required',
    //             'nip_pbsekolah' => 'required',
    //             'nama_pbsekolah' => 'required',
    //             'telp_pbsekolah' => 'required'
    //         ]
    //     );

    //     $img = $request->file('foto_user')->store('img');
    //     if($request->fotoLama) {
    //         Storage::delete($request->fotoLama);
    //     }
    //     $pass = Hash::make($request->input('password'));

    //     DB::select("CALL procedure_update_pbsekolah(?,?,?,?,?,?,?,?,?)",
    //         [
    //             $request->user,
    //             $request->username,
    //             $pass,
    //             $request->email,
    //             $img,
    //             $request->id_pbsekolah,
    //             $request->nip_pbsekolah,
    //             $request->nama_pbsekolah,
    //             $request->telp_pbsekolah
    //         ]
    //     );

    //     return redirect('/operator/pbsekolah')->with('sukses', 'Data berhasil diubah');

    // }

    // public function hapuspbsekolah($id = null)
    // {
    //     try{
    //         $user = $this->UserModel->where('id_user',$id)->first();
    //         $hapuspbsekolah = $this->UserModel->where('id_user',$id)->delete();
    //         if($user->foto_user) {
    //             Storage::delete($user->foto_user);
    //         }
            
    //         if($hapuspbsekolah){
    //             return redirect('/operator/pbsekolah');
    //         }
    //     } catch(Exception $e){
    //         return back()->with('error', $e->getMessage());
    //     }
    // }

    public function home()
    {
        return view('pbsekolah.home');
    }

    public function profile() 
    {
        $profile = DB::table('user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->join('pbsekolah', 'pbsekolah.user', '=', 'user.id_user')
            ->get();

        return view('pbsekolah.profile')->with('profile', $profile);
    }
}