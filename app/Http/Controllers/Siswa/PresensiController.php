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
        $validated = $request->validate([
            'dataprakerin' => 'required',
            'datatgl' => 'required',
            'datapbiduka' => 'required',
            'datapbsekolah' => 'required',
            'datastatus' => 'required',
            'dataket' => 'required',
        ]);

        // dd($validated);

            try {
                $tambah_presensi = DB::select('CALL procedure_insert_presensi(?,?,?,?,?,?)', [
                    $validated['dataprakerin'],
                    $validated['datatgl'],
                    $validated['datapbiduka'],
                    $validated['datapbsekolah'],
                    $validated['datastatus'],
                    $validated['dataket']
                ]);

                sweetalert()->addSuccess('Data Presensi Berhasil Ditambah!');
                return redirect('/siswa/presensi');
            } catch (\Throwable $th) {
                sweetalert()->addError('Data Presensi Gagal Ditambah!');
                return redirect('/siswa/presensi');
            }
        // try {
        //     $presensi = new PresensiModel();
        //     $id_presensi = DB::select('SELECT generate_new_id_presensi() AS id_presensi');
        //     $array = Arr::pluck($id_presensi, 'id_presensi');
        //     $kode_baru = Arr::get($array, '0');
        //     $tambah_presensi = DB::table('presensi')->insert([
        //         'id_presensi' => $kode_baru,
        //         'prakerin' => $request->input('prakerin'),
        //         'pb_iduka' => $request->input('pb_iduka'),
        //         'pb_sekolah' => $request->input('pb_sekolah'),
        //         'tgl_presensi' => $request->input('tgl_presensi'),
        //         'keterangan_presensi' => $request->input('keterangan_presensi'),
        //         'status_presensi' => $request->input('status_presensi'),
                
        //     ]);
        //     if ($tambah_presensi) {
        //         sweetalert()->addSuccess('Data Presensi Berhasil Ditambah!');
        //         return redirect('/siswa/presensi');
        //     } else {
        //         return "input data gagal";
        //     }
        // } catch (Exception $e) {
        //     return $e->getMessage();
        // }
            
    }
    public function editpresensi(Request $request)
    {
        // $validated = $request->validate([
        //     'tgl_presensi' => 'required',
        //     'keterangan_presensi' => 'required',
        //     'status_presensi' => 'required',
        // ]);

        //     try {
        //         $edit_pengajuan = DB::select('CALL procedure_update_pengajuan(?,?,?,?,?,?,?)', [
        //             $request->idpresensi,
        //             $validated['nama_iduka'],
        //             $validated['pimpinan_iduka'],
        //             $validated['alamat_iduka'],
        //             $validated['telp_iduka'],
        //             $request->id_pengajuan,
        //             $validated['tgl_pengajuan']
        //         ]);
        // } catch (Exception $e) {
        //     return $e->getMessage();
        // } finally {
        //     sweetalert()->addSuccess('Data Pengajuan Berhasil Diedit!');
        //     return redirect('/siswa/pengajuan');
        // }
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
