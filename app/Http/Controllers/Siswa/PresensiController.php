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
        ->join('pengajuan', 'pengajuan.id_pengajuan', '=', 'prakerin.pengajuan')
        ->select('presensi.*','prakerin.*','pengajuan.*')
        ->get();    
        return view('siswa.presensi', compact('presensi','prakerin','pbiduka','pbsekolah'),["edit" => $presensi]);
    }
    
    public function tambahpresensi(Request $request)
    {
        $request->validate(
            [
                'prakerin' => 'required',
                'pb_iduka' => 'required',
                'pb_sekolah' => 'required',
                'status_presensi' => 'required',
                'keterangan_presensi' => 'required',
            ]
        );

        $tglabsen = now();

        DB::insert("CALL procedure_insert_presensi(
            :dataprakerin, :datatgl, :datapbiduka, :datapbsekolah, :datastatus, :dataket)",
            [
                'dataprakerin' => $request->prakerin,
                'datatgl' => $tglabsen,
                'datapbiduka' => $request->pb_iduka,
                'datapbsekolah' => $request->pb_sekolah,
                'datastatus' => $request->status_presensi,
                'dataket' => $request->keterangan_presensi,
            ]
        );

        sweetalert()->addSuccess('Data Presensi Berhasil Ditambah!');
        return redirect('/siswa/presensi');
            
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
