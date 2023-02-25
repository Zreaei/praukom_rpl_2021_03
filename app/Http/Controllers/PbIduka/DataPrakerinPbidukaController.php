<?php

namespace App\Http\Controllers\PbIduka;

use App\Models\PrakerinModel;
use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\JurusanModel;
use App\Models\PresensiModel;
use App\Models\KegiatanModel;
use App\Models\PbidukaModel;
use App\Models\PbsekolahModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataPrakerinPbidukaController extends Controller
{
    protected $PrakerinModel;
    protected $SiswaModel;
    protected $KelasModel;
    protected $JurusanModel;
    protected $KegiatanModel;
    protected $PresensiModel;
    protected $PbidukaModel;
    protected $PbsekolahModel;
    public function __construct()
    {
        $this->PrakerinModel = new PrakerinModel;
        $this->SiswaModel = new SiswaModel;
        $this->KelasModel = new KelasModel;
        $this->JurusanModel = new JurusanModel;
        $this->PresensiModel = new PresensiModel;
        $this->KegiatanModel = new KegiatanModel;
        $this->PbidukaModel = new PbidukaModel;
        $this->PbsekolahModel = new PbsekolahModel;
    }
    public function dataprakerin() 
    {
        $dataprakerin = DB::table('prakerin')
        ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->select('kelas.*','jurusan.*','siswa.*','prakerin.*')
        ->get();
        return view('pbiduka.prakerin', compact('dataprakerin'));
    }

    // data presensi siswa
    public function datapresensi()
    {
        $datapresensi = DB::table('presensi') 
        ->join('prakerin', 'prakerin.id_prakerin', '=', 'presensi.prakerin')
        ->join('pb_iduka', 'pb_iduka.nik', '=', 'presensi.pb_iduka')
        ->select('presensi.*','prakerin.*','pb_iduka.*')
        ->get();    
        return view('pbiduka.presensi', compact('datapresensi'));
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
                'konfirmasi_pbiduka' => ('terima')
            ];
            $hapus = DB::table('presensi')
                ->where('id_presensi', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Dikonfirmasi');
                return redirect('/pbiduka/presensi');
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
                'konfirmasi_pbiduka' => ('tolak')
            ];
            $hapus = DB::table('presensi')
                ->where('id_presensi', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Ditolak');
                return redirect('/pbiduka/presensi');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }    
    public function datakegiatan()
    {
        $datakegiatan = DB::table('kegiatan') 
        ->join('prakerin', 'prakerin.id_prakerin', '=', 'kegiatan.prakerin')
        ->get();    
        return view('pbiduka.kegiatan', compact('datakegiatan'));
    }
}
