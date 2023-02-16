<?php

namespace App\Http\Controllers\Siswa;

use App\Models\KegiatanModel;
use App\Models\PrakerinModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class KegiatanController extends Controller
{
    protected $KegiatanModel;
    protected $PrakerinModel;

    public function __construct()
    {
        
        $this->KegiatanModel = new KegiatanModel;
        $this->PrakerinModel = new PrakerinModel;
    }
    public function kegiatan()
    {
        $prakerin = $this->PrakerinModel::all();
        $kegiatan = DB::table('kegiatan') 
        ->join('prakerin', 'prakerin.id_prakerin', '=', 'kegiatan.prakerin')
        ->select('kegiatan.*')
        ->get();    
        return view('siswa.kegiatan', compact('kegiatan','prakerin'),["edit" => $kegiatan]);
    }
    
    public function tambahkegiatan(Request $request)
    {
        try {
            $kegiatan = new KegiatanModel();
            $id_kegiatan = DB::select('SELECT generate_new_id_kegiatan() AS id_kegiatan');
            $array = Arr::pluck($id_kegiatan, 'id_kegiatan');
            $kode_baru = Arr::get($array, '0');
            if ($request->hasFile('foto_kegiatan')) {
                    $file = $request->file('foto_kegiatan');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extention;
                    $file->move('storage', $filename);
                    $kegiatan->foto_kegiatan = $filename;
            };
            $tambah_kegiatan = DB::table('kegiatan')->insert([
                'id_kegiatan' => $kode_baru,
                'prakerin' => $request->input('prakerin'),
                'foto_kegiatan' => $request->input('foto_kegiatan'),
                'keterangan_kegiatan' => $request->input('keterangan_kegiatan'),
                'tgl_kegiatan' => $request->input('tgl_kegiatan'),
                'jam_masuk' => $request->input('jam_masuk'),
                'jam_keluar' => $request->input('jam_keluar'),
                
            ]);
            // $img = $request->file('foto_kegiatan')->store('img');
            if ($tambah_kegiatan) {
                return redirect('/siswa/kegiatan');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
            
    }
    public function editkegiatan(Request $request)
    {
        try {
            $data = [
                'tgl_kegiatan' => $request->input('tgl_kegiatan'),
                'jam_masuk' => $request->input('jam_masuk'),
                'jam_keluar' => $request->input('jam_keluar'),
                'keterangan_kegiatan' => $request->input('keterangan_kegiatan'),
                'foto_kegiatan' => $request->input('foto_kegiatan'),
            ];
            $upd = $this->KegiatanModel
                        ->where('id_kegiatan', $request->input('id_kegiatan'))
                        ->update($data);
            if($upd){
                return redirect('/siswa/kegiatan');
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
            $hapus = $this->KegiatanModel
                            ->where('id_kegiatan',$id)
                            ->delete();
            if($hapus){
                return redirect('/siswa/kegiatan');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }

        // $presensi = PresensiModel::findorfail($id);
        // $presensi->delete();
        // return redirect('/siswa/presensi')->with('success', 'Data Berhasil dihapus');
    
}
