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
        ->select('presensi.*')
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
                return redirect('/siswa/presensi');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }

        // $presensi = DB::select('SELECT * from agenda');
        // $presensi = new PresensiModel();
        // $id_agenda = DB::select('SELECT newidagenda() AS id_agenda');
        // $array = Arr::pluck($id_agenda, 'id_agenda');
        // $kode_baru = Arr::get($array, '0');
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;
        //     $file->move('storage/img/', $filename);
        //     $presensi->foto = $filename;
        // }
        // $tambah_presensi = DB::table('agenda')->insert([
        //     'id_agenda' => $kode_baru,
        //     'status_agenda' => $request->input('status_agenda'),
        //     'keterangan_agenda' => $request->input('keterangan_agenda'),
        //     'tgl_agenda' => $request->input('tgl_agenda'),
        //     'foto' => $presensi->foto,
            
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
                return redirect('/siswa/presensi');
            }else{
                return 'danar biji';
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
                return redirect('/siswa/presensi');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    
}
