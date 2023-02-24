<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PresensiModel;
use App\Models\PrakerinModel;
use App\Models\PbidukaModel;
use App\Models\PbsekolahModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PresensiController extends Controller
{
    protected $PresensiModel;
    protected $PrakerinModel;
    protected $PbidukaModel;
    protected $PbsekolahModel;

    public function __construct()
    {
        $this->PresensiModel = new PresensiModel;
        $this->PrakerinModel = new PrakerinModel;
        $this->PbidukaModel = new PbidukaModel;
        $this->PbsekolahModel = new PbsekolahModel;
    }
    public function presensi()
    {
        $prakerin = $this->PrakerinModel::all();
        $pbiduka = $this->PbidukaModel::all();
        $pbsekolah = $this->PbsekolahModel::all();
        $presensi = DB::table('presensi') 
        ->join('prakerin', 'prakerin.id_prakerin', '=', 'presensi.prakerin')
        ->select('presensi.*','prakerin.*')
        ->get();    
        return view('siswa.presensi', compact('presensi','prakerin','pbiduka','pbsekolah'),["edit" => $presensi]);
    }
    
    public function tambahpresensi(Request $request)
    {
        try {
            $presensi = new PresensiModel();
            $id_presensi = DB::select('SELECT generate_new_id_presensi() AS id_presensi');
            $array = Arr::pluck($id_presensi, 'id_presensi');
            $kode_baru = Arr::get($array, '0');
            $tambah_presensi = DB::table('presensi')->insert([
                'id_presensi' => $kode_baru,
                'prakerin' => $request->input('prakerin'),
                'pb_iduka' => $request->input('pb_iduka'),
                'pb_sekolah' => $request->input('pb_sekolah'),
                'tgl_presensi' => $request->input('tgl_presensi'),
                'keterangan_presensi' => $request->input('keterangan_presensi'),
                'status_presensi' => $request->input('status_presensi'),
                
            ]);
            if ($tambah_presensi) {
                sweetalert()->addSuccess('Data Presensi Berhasil Ditambah!');
                return redirect('/siswa/presensi');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
            
    }
    public function editpresensi(Request $request)
    {
        try {
            $data = [
                'tgl_presensi' => $request->input('tgl_presensi'),
                'keterangan_presensi' => $request->input('keterangan_presensi'),
                'status_presensi' => $request->input('status_presensi'),
            ];
            $upd = $this->PresensiModel
                        ->where('id_presensi', $request->input('id_presensi'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Data Presensi Berhasil Diedit!');
                return redirect('/siswa/presensi');
            }else{
                return 'data gagal di edit';
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function hapus($id)
    {
        try{
            $hapus = $this->PresensiModel
                            ->where('id_presensi',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('Data Presensi Berhasil Dihapus!');
                return redirect('/siswa/presensi');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    
}
