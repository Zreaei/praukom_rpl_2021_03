<?php

namespace App\Http\Controllers\Verifikator;

use App\Http\Controllers\Controller;
use App\Models\VerifikasiModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerifikatorVerifikasiController extends Controller
{
    protected $VerifikasiModel;

    public function __construct()
    {
        $this->VerifikasiModel = new VerifikasiModel;
    }

    public function verifikasi()
    {
        $dataVerifikasi = DB::table('verifikasi')
        ->join('siswa', 'siswa.nis', '=', 'verifikasi.siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->get();
        return view('verifikator.verifikasi', compact('dataVerifikasi'));
    }

    public function statuskonfirmasi($id = null)
    {
        try {
            $status = [
                'konfirmasi_verifikator' => ('terima')
            ];

            $hapus = DB::table('verifikasi')
                ->where('id_verifikasi', $id)
                ->update($status);

            if ($hapus) {
                sweetalert()->addSuccess('Siswa Berhasil Dikonfirmasi!');
                return redirect('/verifikator/verifikasi');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public function statustolak($id = null)
    {
        try {
            $status = [
                'konfirmasi_verifikator' => ('tolak')
            ];

            $hapus = DB::table('verifikasi')
                ->where('id_verifikasi', $id)
                ->update($status);

            if ($hapus) {
                sweetalert()->addSuccess('Siswa Berhasil Ditolak!');
                return redirect('/verifikator/verifikasi');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }

    }    
}
