<?php

namespace App\Http\Controllers\Siswa;

use App\Models\VerifikasiModel;
use App\Models\SiswaModel;
use App\Models\VerifikatorModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class VerifikasiController extends Controller
{
    protected $VerifikasiModel;
    protected $SiswaModel;
    protected $VerifikatorModel;

    public function __construct()
    {
        
        $this->VerifikasiModel = new VerifikasiModel;
        $this->SiswaModel = new SiswaModel;
        $this->VerifikatorModel = new VerifikatorModel;
    }
    public function verifikasi()
    {
        $siswa = $this->SiswaModel::all();
        $verifikator = $this->VerifikatorModel::all();
        $verifikasi = DB::table('verifikasi') 
        ->join('siswa', 'siswa.nis', '=', 'verifikasi.siswa')
        ->join('verifikator', 'verifikator.id_verifikator', '=', 'verifikasi.verifikator')
        ->get();    
        return view('siswa.verifikasi', compact('siswa','verifikator','verifikasi'));
    }
    
    public function tambahverifikasi(Request $request)
    {
        try {
            $verifikasi = new VerifikasiModel();
            $id_verifikasi = DB::select('SELECT generate_new_id_verifikasi() AS id_verifikasi');
            $array = Arr::pluck($id_verifikasi, 'id_verifikasi');
            $kode_baru = Arr::get($array, '0');
            $img = $request->file('bukti_verifikasi')->store('img');
            $tambah_verifikasi = DB::table('verifikasi')->insert([
                'id_verifikasi' => $kode_baru,
                'siswa' => $request->input('siswa'),
                'verifikator' => $request->input('verifikator'),
                'tgl_verifikasi' => $request->input('tgl_verifikasi'),
                'bukti_verifikasi' => $img,
                
            ]);
            if ($tambah_verifikasi) {
                sweetalert()->addSuccess('Data Verifikasi Berhasil Ditambah!');
                return redirect('/siswa/verifikasi');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
            
    }
    public function editverifikasi(VerifikasiModel $verifikasi)
    {
        $edit = DB::table('verifikasi')
            ->join('siswa', 'siswa.nis', '=', 'verifikasi.siswa')
            ->join('verifikator', 'verifikator.id_verifikator', '=', 'verifikasi.verifikator')
            ->select('verifikasi.*')
            ->where('id_verifikasi', '=', $verifikasi->id_verifikasi)
            ->get();

            return view('siswa.editverifikasi', ["edit" => $edit]);
    }
    public function editsimpanverifikasi(Request $request)
    {
        try {
            $img = $request->file('bukti_verifikasi')->store('img');
            if($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $data = [
                'tgl_verifikasi' => $request->input('tgl_verifikasi'),
                'bukti_verifikasi' => $img,
            ];
            $upd = $this->VerifikasiModel
                        ->where('id_verifikasi', $request->input('id_verifikasi'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Data Verifikasi Berhasil Diedit!');
                return redirect('/siswa/verifikasi');
            }else{
                return 'eror';
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function hapus($id)
    {
        try{
            $hapus = $this->VerifikasiModel
                            ->where('id_verifikasi',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Data Verifikasi Berhasil Dihapus!');
                return redirect('/siswa/verifikasi');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    
}
