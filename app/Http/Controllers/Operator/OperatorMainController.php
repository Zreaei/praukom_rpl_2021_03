<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatorMainController extends Controller
{

    public function pengguna(Request $request) 
    {
        if($request->has('search')) {
            $search = $request->input('search');
            $pengguna = DB::table('view_join_roleuser')
                ->where('username', 'like', "%" . $search . "%")
                ->orWhere('nama_level', 'like', "%" . $search . "%")
                ->paginate(10);
        } else {
            $pengguna = DB::table('view_join_roleuser')->paginate(5);
        }
            return view('operator.pengguna', compact('pengguna'));
    }

    public function riwayat() 
    {
        $riwayat_siswa = DB::table('log_operator_siswa')->get();
        $riwayat_pbiduka = DB::table('log_operator_pbiduka')->get();
        $riwayat_pbsekolah = DB::table('log_operator_pbsekolah')->get();
        $riwayat_verifikator = DB::table('log_operator_verifikator')->get();

            return view('operator.riwayat', compact('riwayat_siswa', 'riwayat_pbiduka', 'riwayat_pbsekolah', 'riwayat_verifikator'));
    }

    public function pengajuan() 
    {
        $pengajuan = DB::table('pengajuan')
            ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
            ->join('waka_hubin', 'waka_hubin.id_wkhubin', '=', 'pengajuan.wkhubin')
            ->join('kaprog', 'kaprog.id_kaprog', '=', 'pengajuan.kaprog')
            ->join('walas', 'walas.id_walas', '=', 'pengajuan.walas')
            ->get();

            return view('operator.pengajuan')->with('pengajuan', $pengajuan);
    }

    public function monitoring() 
    {
        $monitoring = DB::table('monitoring')
            ->join('pb_sekolah', 'pb_sekolah.id_pbsekolah', '=', 'monitoring.pb_sekolah')
            ->join('prakerin', 'prakerin.id_prakerin', '=', 'monitoring.prakerin')
            ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'prakerin.iduka')
            ->get();

            return view('operator.monitoring')->with('monitoring', $monitoring);
    }

    public function home()
    {
        return view('operator.home');
    }
    public function profile() 
    {
        $profile = DB::table('user')
            ->join('level_user', 'level_user.id_level', '=', 'user.level')
            ->join('operator', 'operator.user', '=', 'user.id_user')
            ->get();

        return view('operator.profile');
    }
}