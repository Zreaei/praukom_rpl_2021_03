<?php

namespace App\Http\Controllers\pbsekolah;

use App\Http\Controllers\Controller;
use App\Models\AbsensiModel;
use App\Models\PrakerinModel;
use App\Models\MonitoringModel;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PbsekolahMainController extends Controller
{
    protected $PrakerinModel;
    protected $MonitoringModel;
    protected $AbsensiModel;

    public function __construct()
    {
        $this->PrakerinModel = new PrakerinModel;
        $this->MonitoringModel = new MonitoringModel;
        $this->AbsensiModel = new AbsensiModel;
    }

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

    public function presensi(PrakerinModel $prakerin)
    {
        $prakerin = DB::table('prakerin')
            ->join('presensi', 'presensi.prakerin', '=', 'prakerin.id_prakerin')
            ->join('absensi', 'absensi.id_presensi', '=', 'presensi.id_presensi')
            ->get();

            return view('pbsekolah.presensi')->with('prakerin', $prakerin);
    }

    public function kegiatan(PrakerinModel $prakerin)
    {
        $prakerin = DB::table('prakerin')
            ->join('kegiatan', 'kegiatan.prakerin', '=', 'prakerin.id_prakerin')
            ->join('agenda', 'agenda.id_kegiatan', '=', 'kegiatan.id_kegiatan')
            ->get();

            return view('pbsekolah.kegiatan')->with('prakerin', $prakerin);
    }

    public function terima(AbsensiModel $tgl_presensi)
    {
        dd($tgl_presensi);
        try {
            // $id_user = DB::table('user')
            // ->where('username', Auth:user()->username)
            // ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $konfirmasi = [
                'konfirmasi_pbsekolah' => ('terima')
            ];
            // AbsensiModel::where('id_presensi', $id)->update($konfirmasi);
            $update = DB::table('absensi')
                ->where('id_presensi', $id)
                // ->where('tgl_presensi', $tgl_presensi)
                ->update($konfirmasi);
            if($update) {
                return redirect('pbsekolah/prakerin');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }

    public function tolak(AbsensiModel $id=null)
    {
        try {
            // $id_user = DB::table('user')
            // ->where('username', Auth:user()->username)
            // ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $konfirmasi = [
                'konfirmasi_pbsekolah' => ('tolak')
            ];
            AbsensiModel::where('id_presensi', $id)->update($konfirmasi);
            return redirect('pbsekolah/prakerin');
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }

    // LANJUT LAGI !!!
    public function monitoring()
    {
        $prakerin = DB::table('prakerin')
            ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'prakerin.iduka')
            ->get();

        $pbsekolah = DB::table('pb_sekolah')->get();

        $monitoring = DB::table('monitoring')
            ->join('pb_sekolah', 'pb_sekolah.id_pbsekolah', '=', 'monitoring.pb_sekolah')
            ->join('prakerin', 'prakerin.id_prakerin', '=', 'monitoring.prakerin')
            ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
            ->join('iduka', 'iduka.id_iduka', '=', 'prakerin.iduka')
            ->get();

            return view('pbsekolah.monitoring', compact('prakerin', 'monitoring', 'pbsekolah'));
    }

    public function simpanmonitoring(Request $request)
    {
        $request->validate(
            [
                'pb_sekolah' => 'required',
                'prakerin' => 'required',
                'tgl_monitoring' => 'required',
                'laporan_monitoring' => 'required'
            ]
        );


        $file = $request->file('laporan_monitoring')->store('img');

        DB::insert("CALL procedure_insert_monitoring(
            :datapbsekolah, :dataprakerin, :datatgl, :datalaporan)",
            [
                'datapbsekolah' => $request->pb_sekolah,
                'dataprakerin' => $request->prakerin,
                'datatgl' => $request->tgl_monitoring,
                'datalaporan' => $file
            ]
        );

        return redirect('/pbsekolah/prakerin')->with('sukses', 'Data berhasil ditambah');
    }

    public function hapusmonitoring($id = null)
    {
        try{
            $monitoring = $this->MonitoringModel->where('id_monitoring',$id)->first();
            $hapusmonitoring = $this->MonitoringModel->where('id_monitoring',$id)->delete();
            if($monitoring->laporan_monitoring) {
                Storage::delete($monitoring->laporan_monitoring);
            }
            
            if($hapusmonitoring){
                return redirect('/pbsekolah/prakerin');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

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