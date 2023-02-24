<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\{SiswaModel, UserModel};
// use App\Models\KelasModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};
use Illuminate\Support\Facades\Storage;

class OperatorDataSiswaController extends Controller
{
    protected $SiswaModel;
    protected $UserModel;
    // protected $KelasModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->SiswaModel = new SiswaModel;
        // $this->KelasModel = new KelasModel;
    }

    public function siswa() 
    {
        $kelas = DB::table('kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->get();

        $siswa = DB::table('siswa')
            ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->join('user', 'user.id_user', '=', 'siswa.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->get();

        $jumlah_siswa = collect(DB::select("SELECT * FROM view_agregat_jumlahsiswa"))
            ->firstOrFail()
            ->jml_siswa;

            return view('operator.siswa.siswa', compact('siswa', 'kelas', 'jumlah_siswa'));
    }

    public function tambahsiswa(Request $request)
    {
        $request->validate(
            [
                'level' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'nis' => 'required',
                'kelas' => 'required',
                'nama_siswa' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'telp_siswa' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        $pass = Hash::make($request->input('password'));

        DB::insert("CALL procedure_insert_siswa(
            :datalevel, :datausername, :datapassword, :dataemail, :datafoto_user, :datanis, :datakelas, :datanama_siswa, :datatempat_lahir, :datatgl_lahir, :datatelp_siswa)",
            [
                'datalevel' => $request->level,
                'datausername' => $request->username,
                'datapassword' => $pass,
                'dataemail' => $request->email,
                'datafoto_user' => $img,
                'datanis' => $request->nis,
                'datakelas' => $request->kelas,
                'datanama_siswa' => $request->nama_siswa,
                'datatempat_lahir' => $request->tempat_lahir,
                'datatgl_lahir' => $request->tgl_lahir,
                'datatelp_siswa' => $request->telp_siswa
            ]
        );

        return redirect('/operator/siswa')->with('sukses', 'Data berhasil ditambah');
    }

    public function editsiswa(SiswaModel $siswa)
    {
        $kelas = DB::table('kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->get();

        $edit = DB::table('siswa')
            ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->join('user', 'user.id_user', '=', 'siswa.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('siswa.*', 'kelas.*', 'angkatan.*', 'jurusan.*', 'user.*', 'level_user.*')
            ->where('nis', '=', $siswa->nis)
            ->get();

            return view('operator.siswa.editsiswa', compact('edit', 'kelas'));
    }

    public function editsimpansiswa(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'foto_user' => 'required',
                'kelas' => 'required',
                'nama_siswa' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'telp_siswa' => 'required'
            ]
        );

        $img = $request->file('foto_user')->store('img');
        if($request->fotoLama) {
            Storage::delete($request->fotoLama);
        }
        $pass = Hash::make($request->input('password'));

        DB::select("CALL procedure_update_siswa(?,?,?,?,?,?,?,?,?,?,?)",
            [
                $request->user,
                $request->username,
                $pass,
                $request->email,
                $img,
                $request->nis,
                $request->kelas,
                $request->nama_siswa,
                $request->tempat_lahir,
                $request->tgl_lahir,
                $request->telp_siswa
            ]
        );

        return redirect('/operator/siswa')->with('sukses', 'Data berhasil diubah');

    }

    public function hapussiswa($id = null)
    {
        try{
            $user = $this->UserModel->where('id_user',$id)->first();
            $hapussiswa = $this->UserModel->where('id_user',$id)->delete();
            if($user->foto_user) {
                Storage::delete($user->foto_user);
            }
            
            if($hapussiswa){
                return redirect('/operator/siswa');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
    
    public function cetaksiswa(SiswaModel $siswa)
    {
        $cetak = DB::table('siswa')
            ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->join('user', 'user.id_user', '=', 'siswa.user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->select('siswa.*', 'kelas.*', 'angkatan.*', 'jurusan.*', 'user.*', 'level_user.*')
            ->where('nis', '=', $siswa->nis)
            ->get();

            return view('operator.siswa.cetaksiswa', ["cetak" => $cetak]);
    }

    public function nilaipkl(SiswaModel $siswa) 
    {

        $penilaian = DB::table('siswa')
            ->join('penilaian_pkl', 'penilaian_pkl.siswa', '=', 'siswa.nis')
            ->join('nilai_pkl', 'nilai_pkl.id_nilaipkl', '=', 'penilaian_pkl.id_nilaipkl')
            ->join('kategori_nilai', 'kategori_nilai.id_kat_nilai', '=', 'nilai_pkl.kategori_nilai')
            ->get();

        return view('operator.siswa.nilaipkl')->with('penilaian', $penilaian);
    }

    public function nilaiverif(SiswaModel $siswa) 
    {
        $penilaian = DB::table('siswa')
            ->join('penilaian_verif', 'penilaian_verif.siswa', '=', 'siswa.nis')
            ->join('nilai_verif', 'nilai_verif.id_nilaiverif', '=', 'penilaian_verif.id_nilaiverif')
            ->join('kategori_nilai', 'kategori_nilai.id_kat_nilai', '=', 'nilai_verif.kategori_nilai')
            ->get();

            return view('operator.siswa.nilaiverif')->with('penilaian', $penilaian);
    }
}