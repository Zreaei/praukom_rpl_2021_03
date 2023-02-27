<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PrakerinModel;
use App\Models\PengajuanModel;
use App\Models\SiswaModel;
use App\Models\IdukaModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PrakerinController extends Controller
{
    protected $PrakerinModel;
    protected $PengajuanModel;
    protected $SiswaModel;
    protected $IdukaModel;
    

    public function __construct()
    {
        $this->PrakerinModel = new PrakerinModel;
        $this->PengajuanModel = new PengajuanModel;
        $this->SiswaModel = new SiswaModel;
        $this->IdukaModel = new IdukaModel;
    }
    public function prakerin()
    {
        $pengajuan = $this->PengajuanModel::all();
        $siswa = $this->SiswaModel::all();
        $iduka = $this->IdukaModel::all();
        $prakerin = DB::table('prakerin') 
        ->join('pengajuan', 'pengajuan.id_pengajuan', '=', 'prakerin.pengajuan')
        ->join('siswa', 'siswa.nis', '=', 'prakerin.siswa')
        ->join('iduka', 'iduka.id_iduka', '=', 'prakerin.iduka')
        ->select('prakerin.*','pengajuan.*','siswa.*','iduka.*')
        ->get();    
        return view('siswa.prakerin', compact('prakerin','siswa','pengajuan','iduka'),["edit" => $prakerin]);
    }

    // public function tambahprakerin()
    // {
    //     $pengajuan = $this->PengajuanModel::all();
    //     $siswa = $this->SiswaModel::all();
    //     $prakerin = $this->PrakerinModel::all();
    //     return view('siswa.tambahprakerin', compact('prakerin,siswa,pengajuan'));
    // }
    
    public function tambahprakerin(Request $request)
    {
        try {
            $id_prakerin = DB::select('SELECT generate_new_id_prakerin() AS id_prakerin');
            $array = Arr::pluck($id_prakerin, 'id_prakerin');
            $kode_baru = Arr::get($array, '0');
            $tgl_awal = now();
            $tambah_prakerin = DB::table('prakerin')->insert([
                'id_prakerin' => $kode_baru,
                'pengajuan' => $request->input('pengajuan'),
                'siswa' => $request->input('siswa'),
                'iduka' => $request->input('iduka'),
                'tgl_mulai' => $tgl_awal
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
