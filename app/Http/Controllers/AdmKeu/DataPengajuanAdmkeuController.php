<?php

namespace App\Http\Controllers\AdmKeu;

use App\Models\AdmkeuModel;
use App\Models\PengajuanModel;
use App\Models\SiswaModel;
use App\Models\IdukaModel;
use Error;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DataPengajuanAdmkeuController extends Controller
{
    protected $PengajuanModel;
    protected $SiswaModel;
    protected $IdukaModel;
    protected $AdmkeuModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
        $this->SiswaModel = new SiswaModel;
        $this->IdukaModel = new IdukaModel;
        $this->AdmkeuModel = new AdmkeuModel;
    }
    public function datapengajuan()
    {
        $datapengajuan = DB::table('pengajuan')
        ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
        ->select('pengajuan.*','iduka.*','siswa.*','kelas.*','jurusan.*')
        ->get();
        return view('admkeu.pengajuan', compact('datapengajuan'));
    }
    public function statuskonfirmasi($id = null)
    {
        try {
            // $id_user = DB::table('user')
            //     ->select('id_user')
            //     ->where('username', Auth::user()->username)
            //     ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');
            // dd($id);

            $status = [
                // 'approver' => $approver,
                'konfirmasi_admkeu' => ('Konfirmasi Diterima')
            ];
            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Dikonfirmasi');
                return redirect('/admkeu/pengajuan');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }
    }
    public function statustolak($id = null)
    {
        try {
            // $id_user = DB::table('user')
            //     ->select('id_user')
            //     ->where('username', Auth::user()->username)
            //     ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $status = [
                // 'approver' => $approver,
                'konfirmasi_admkeu' => ('Konfirmasi Ditolak')
            ];
            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Ditolak');
                return redirect('/admkeu/pengajuan');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }    
}

