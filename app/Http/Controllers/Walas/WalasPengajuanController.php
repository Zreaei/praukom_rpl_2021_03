<?php

namespace App\Http\Controllers\Walas;

use App\Http\Controllers\Controller;
use App\Models\{SiswaModel,IdukaModel,PengajuanModel,WalasModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalasPengajuanController extends Controller
{
    protected $PengajuanModel;
    protected $SiswaModel;
    protected $IdukaModel;
    protected $WalasModel;

    public function __construct()
    {
        $this->SiswaModel = new SiswaModel;
        $this->PengajuanModel = new PengajuanModel;
        $this->IdukaModel = new IdukaModel;
        $this->WalasModel = new WalasModel;
    }

    public function pengajuan()
    {
        $dataPengajuan = DB::table('pengajuan')
        ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
        ->select('pengajuan.*','iduka.*','siswa.*','kelas.*','jurusan.*')
        ->get();
        return view('walas.pengajuan.pengajuan', compact('dataPengajuan'));
    }

    public function statuskonfirmasi($id = null)
    {
        try {
            $status = [
                'konfirmasi_walas' => ('terima')
            ];

            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);

            if ($hapus) {
                sweetalert()->addSuccess('Data Berhasil Dikonfirmasi!');
                return redirect('/walas/pengajuan');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function statustolak($id = null)
    {
        try {
            $status = [
                'konfirmasi_walas' => ('tolak')
            ];

            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);

            if ($hapus) {
                sweetalert()->addSuccess('Data Berhasil Ditolak!');
                return redirect('/walas/pengajuan');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }

    }    
}
