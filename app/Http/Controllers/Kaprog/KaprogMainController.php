<?php

namespace App\Http\Controllers\Kaprog;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PengajuanModel;

class KaprogMainController extends Controller
{
    public function home()
    {
        return view('kaprog.home');
    }
    public function profile() 
    {
        $profile = DB::table('user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->join('kaprog', 'kaprog.user', '=', 'user.id_user')
            ->get();

        return view('kaprog.profile');
    }

    public function pengajuan() 
    {
        $pengajuan = DB::table('pengajuan')
            ->join('waka_hubin', 'waka_hubin.id_wkhubin', '=', 'pengajuan.wkhubin')
            ->join('kaprog', 'kaprog.id_kaprog', '=', 'pengajuan.kaprog')
            ->join('walas', 'walas.id_walas', '=', 'pengajuan.walas')
            ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
            ->join('user', 'user.id_user', '=', 'siswa.user')
            ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
            ->join('angkatan', 'angkatan.id_angkatan', '=', 'kelas.angkatan')
            ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
            ->get();

            return view('kaprog.pengajuan')->with('pengajuan', $pengajuan);
    }

    public function terima(Request $request, $id=null)
    {
        try {
            // $id_user = DB::table('user')
            // ->where('username', Auth:user()->username)
            // ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $konfirmasi = [
                'konfirmasi_kaprog' => ('terima')
            ];
            PengajuanModel::where('id_pengajuan', $id)->update($konfirmasi);
            return redirect('kaprog/pengajuan');
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }

    public function tolak(Request $request, $id=null)
    {
        try {
            // $id_user = DB::table('user')
            // ->where('username', Auth:user()->username)
            // ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $konfirmasi = [
                'konfirmasi_kaprog' => ('tolak')
            ];
            PengajuanModel::where('id_pengajuan', $id)->update($konfirmasi);
            return redirect('kaprog/pengajuan');
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }
}
