<?php

namespace App\Http\Controllers\PbIduka;

use App\Models\NilaipklModel;
use App\Models\KategorinilaiModel;
use App\Models\PenilaianpklModel;
use App\Models\SiswaModel;
use App\Models\JurusanModel;
use App\Models\PbidukaModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class NilaipklController extends Controller
{
    protected $NilaipklModel;
    protected $KategorinilaiModel;
    protected $PenilaianpklModel;
    protected $SiswaModel;
    protected $JurusanModel;
    protected $PbidukaModel;
    

    public function __construct()
    {
        $this->NilaipklModel = new NilaipklModel;
        $this->KategorinilaiModel = new KategorinilaiModel;
        $this->PenilaianpklModel = new PenilaianpklModel;
        $this->SiswaModel = new SiswaModel;
        $this->JurusanModel = new JurusanModel;
        $this->PbidukaModel = new PbidukaModel;
    }
    public function nilaipkl()
    {
        $kategorinilai = $this->KategorinilaiModel::all();
        $penilaian = $this->PenilaianpklModel::all();
        $siswa = $this->SiswaModel::all();
        $jurusan = $this->JurusanModel::all();
        $pbiduka = $this->PbidukaModel::all();
        $nilaipkl = DB::table('nilai_pkl') 
        ->join('penilaian_pkl', 'penilaian_pkl.id_nilaipkl', '=', 'nilai_pkl.id_nilaipkl')
        ->join('kategori_nilai', 'kategori_nilai.id_kat_nilai', '=', 'nilai_pkl.kategori_nilai')
        ->join('siswa', 'siswa.nis', '=', 'penilaian_pkl.siswa')
        ->join('pb_iduka', 'pb_iduka.nik', '=', 'penilaian_pkl.pb_iduka')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kategori_nilai.jurusan')
        ->select('kategori_nilai.*','nilai_pkl.*','penilaian_pkl.*','siswa.*','pb_iduka.*','jurusan.*')
        ->get();    
        return view('pbiduka.penilaianpkl', compact('kategorinilai','penilaian','siswa','jurusan','pbiduka','nilaipkl'),["edit" => $nilaipkl]);
    }
   //  public function tambahprakerin(Request $request)
   //  {
   //      try {
   //          $id_prakerin = DB::select('SELECT generate_new_id_prakerin() AS id_prakerin');
   //          $array = Arr::pluck($id_prakerin, 'id_prakerin');
   //          $kode_baru = Arr::get($array, '0');
   //          $tambah_prakerin = DB::table('prakerin')->insert([
   //              'id_prakerin' => $kode_baru,
   //              'pengajuan' => $request->input('pengajuan'),
   //              'siswa' => $request->input('siswa'),
   //              'iduka' => $request->input('iduka'),
   //              'status_prakerin' => $request->input('status_prakerin'),
   //              'tgl_mulai' => $request->input('tgl_mulai'),
   //              'tgl_selesai' => $request->input('tgl_selesai'),
   //          ]);
   //          if ($tambah_prakerin) {
   //              return redirect('/siswa/prakerin');
   //          } else {
   //              return "input data gagal";
   //          }
   //      } catch (Exception $e) {
   //          return $e->getMessage();
   //      }
   //  }

   // public function editprakerin(Request $request)
   //  {
   //      try {
   //          $data = [
   //              'status_prakerin' => $request->input('status_prakerin'),
   //              'tgl_mulai' => $request->input('tgl_mulai'),
   //              'tgl_selesai' => $request->input('tgl_selesai'),
   //              // dd($request->all())
   //          ];
   //          $upd = $this->PrakerinModel
   //                      ->where('id_prakerin', $request->input('id_prakerin'))
   //                      ->update($data);
   //          if($upd){
   //              return redirect('/siswa/prakerin');
   //          }
   //      } catch (Exception $e) {
   //          return $e->getMessage();
   //      }
        
   //  }

   //  public function hapus($id = null)
   //  {
   //      try{
   //          $hapus = $this->PrakerinModel
   //                          ->where('id_prakerin',$id)
   //                          ->delete();
   //          if($hapus){
   //              return redirect('/siswa/prakerin');
   //          }
   //      }catch(Exception $e){
   //          $e->getMessage();
   //      }
   //  }
}
