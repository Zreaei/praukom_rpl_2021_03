<?php

namespace App\Http\Controllers\Siswa;

use App\Models\KegiatanModel;
use App\Models\PrakerinModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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
        ->get();    
        return view('siswa.kegiatan', compact('kegiatan','prakerin'));
    }
    
    public function tambahkegiatan(Request $request)
    {
        try {
            $kegiatan = new KegiatanModel();
            $id_kegiatan = DB::select('SELECT generate_new_id_kegiatan() AS id_kegiatan');
            $array = Arr::pluck($id_kegiatan, 'id_kegiatan');
            $kode_baru = Arr::get($array, '0');
            $img = $request->file('foto_kegiatan')->store('img');
            $tambah_kegiatan = DB::table('kegiatan')->insert([
                'id_kegiatan' => $kode_baru,
                'prakerin' => $request->input('prakerin'),
                'foto_kegiatan' => $img,
                'keterangan_kegiatan' => $request->input('keterangan_kegiatan'),
                'tgl_kegiatan' => $request->input('tgl_kegiatan'),
                'jam_masuk' => $request->input('jam_masuk'),
                'jam_keluar' => $request->input('jam_keluar'),
                
            ]);
            if ($tambah_kegiatan) {
                sweetalert()->addSuccess('Data Kegiatan Berhasil Ditambah!');
                return redirect('/siswa/kegiatan');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
            
    }
    public function editkegiatan(KegiatanModel $kegiatan)
    {
        $edit = DB::table('kegiatan')
            ->join('prakerin', 'prakerin.id_prakerin', '=', 'kegiatan.prakerin')
            ->select('kegiatan.*')
            ->where('id_kegiatan', '=', $kegiatan->id_kegiatan)
            ->get();

            return view('siswa.editkegiatan', ["edit" => $edit]);
    }
    public function editsimpankegiatan(Request $request)
    {
        try {
            $img = $request->file('foto_kegiatan')->store('img');
            if($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $data = [
                'tgl_kegiatan' => $request->input('tgl_kegiatan'),
                'jam_masuk' => $request->input('jam_masuk'),
                'jam_keluar' => $request->input('jam_keluar'),
                'keterangan_kegiatan' => $request->input('keterangan_kegiatan'),
                'foto_kegiatan' => $img,
            ];
            $upd = $this->KegiatanModel
                        ->where('id_kegiatan', $request->input('id_kegiatan'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Data Kegiatan Berhasil Diedit!');
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
                sweetalert()->addSuccess('Data Kegiatan Berhasil Dihapus!');
                return redirect('/siswa/kegiatan');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    
}
