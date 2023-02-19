<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PrakerinModel;
use App\Models\PengajuanModel;
use App\Models\SiswaModel;
use App\Models\MonitoringModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PrakerinController extends Controller
{
    protected $PrakerinModel;
    protected $PengajuanModel;
    protected $SiswaModel;
    

    public function __construct()
    {
        $this->PrakerinModel = new PrakerinModel;
        $this->PengajuanModel = new PengajuanModel;
        $this->SiswaModel = new SiswaModel;
    }
    public function prakerin()
    {
        $pengajuan = $this->PengajuanModel::all();
        $siswa = $this->SiswaModel::all();
        $prakerin = $this->PrakerinModel::all();
        $prakerin = DB::table('prakerin') 
        ->join('pengajuan', 'pengajuan.id_pengajuan', '=', 'prakerin.pengajuan')
        ->join('siswa', 'siswa.nip_siswa', '=', 'prakerin.siswa')
        ->get();    
        return view('siswa.prakerin', compact('prakerin,siswa,pengajuan'));
    }

    public function tambahprakerin()
    {
        $pengajuan = $this->PengajuanModel::all();
        $siswa = $this->SiswaModel::all();
        $prakerin = $this->PrakerinModel::all();
        return view('siswa.tambahprakerin', compact('prakerin,siswa,pengajuan'));
    }
    
    public function simpanprakerin(Request $request)
    {
        try {
            $id_prakerin = DB::select('SELECT generate_new_id_prakerin() AS id_prakerin');
            $array = Arr::pluck($id_prakerin, 'id_prakerin');
            $kode_baru = Arr::get($array, '0');
            $tambah_prakerin = DB::table('prakerin')->insert([
                'id_prakerin' => $kode_baru,
                'pengajuan' => $request->input('pengajuan'),
                'siswa' => $request->input('siswa'),
                'status_prakerin' => $request->input('status_prakerin'),
                'tgl_mulai' => $request->input('tgl_mulai'),
                'tgl_selesai' => $request->input('tgl_selesai'),
            ]);
            if ($tambah_prakerin) {
                return redirect('/siswa/prakerin');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editpresensi($id = null)
    {
        $prakerin = $this->PrakerinModel->find($id);
        $pengajuan = $this->PengajuanModel::all();
        $siswa = $this->SiswaModel::all();
        return view('siswa.editprakerin', compact('prakerin','pengajuan','siswa'));
        
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'pengajuan' => $request->input('pengajuan'),
                'siswa' => $request->input('siswa'),
                'status_prakerin' => $request->input('status_prakerin'),
                'tgl_mulai' => $request->input('tgl_mulai'),
                'tgl_selesai' => $request->input('tgl_selesai'),
                // dd($request->all())
            ];
            $upd = $this->PrakerinModel
                        ->where('id_prakerin', $request->input('id_prakerin'))
                        ->update($data);
            if($upd){
                return redirect('/siswa/prakerin');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function hapus($id = null)
    {
        try{
            $hapus = $this->PrakerinModel
                            ->where('id_prakerin',$id)
                            ->delete();
            if($hapus){
                return redirect('/siswa/prakerin');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
