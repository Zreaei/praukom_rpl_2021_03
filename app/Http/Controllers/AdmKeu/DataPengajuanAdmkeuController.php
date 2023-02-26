<?php

namespace App\Http\Controllers\AdmKeu;

use App\Models\AdmkeuModel;
use App\Models\PengajuanModel;
use App\Models\SiswaModel;
use App\Models\IdukaModel;
use Error;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DataPengajuanAdmkeuController extends Controller
{
    protected $PengajuanModel;
    protected $SiswaModel;
    protected $IdukaModel;
    protected $AdmkeuModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
        $this->SiswaModel = new SiswaModel;
        $this->IdukaModel = new IdukaModel;
        $this->AdmkeuModel = new AdmkeuModel;
    }
    public function datapengajuan()
    {
        $datapengajuan = DB::table('pengajuan')
        ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.kelas')
        ->join('jurusan', 'jurusan.id_jurusan', '=', 'kelas.jurusan')
        ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
        ->select('pengajuan.*','iduka.*','siswa.*','kelas.*','jurusan.*')
        ->get();
        return view('admkeu.pengajuan', compact('datapengajuan'));
    }
    public function statuskonfirmasi($id = null)
    {
        try {
            // $id_user = DB::table('user')
            //     ->select('id_user')
            //     ->where('username', Auth::user()->username)
            //     ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');
            // dd($id);

            $status = [
                // 'approver' => $approver,
                'konfirmasi_admkeu' => ('dikonfirmasi')
            ];
            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Dikonfirmasi');
                return redirect('/admkeu/pengajuan');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }
    }
    public function statustolak($id = null)
    {
        try {
            // $id_user = DB::table('user')
            //     ->select('id_user')
            //     ->where('username', Auth::user()->username)
            //     ->get();
            // $array = Arr::pluck($id_user, 'id_user');
            // $approver = Arr::get($array, '0');

            $status = [
                // 'approver' => $approver,
                'konfirmasi_admkeu' => ('ditolak')
            ];
            $hapus = DB::table('pengajuan')
                ->where('id_pengajuan', $id)
                ->update($status);
            if ($hapus) {
                flash()->addSuccess('Berhasil Ditolak');
                return redirect('/admkeu/pengajuan');
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }    
}




// class PengajuanController extends Controller
// {
    
//     protected $AdmkeuModel;
//     protected $WkhubinModel;
//     protected $KaprogModel;
//     protected $WalasModel;
//     public function __construct()
//     {
//         $this->PengajuanModel = new PengajuanModel;
//         $this->SiswaModel = new SiswaModel;
//         $this->IdukaModel = new IdukaModel;
//         $this->AdmkeuModel = new AdmkeuModel;
//         $this->WkhubinModel = new WkhubinModel;
//         $this->KaprogModel = new KaprogModel;
//         $this->WalasModel = new WalasModel;
//     }
//     private function generateIdPengajuan(): string
//     {
//         return collect(DB::select('SELECT generate_new_id_pengajuan() AS new_id_pengajuan'))
//         ->firstOrFail()
//         ->new_id_pengajuan;
//     }
//     public function pengajuan()
//     {
//         $siswa = $this->SiswaModel::all();
//         $admkeu = $this->AdmkeuModel::all();
//         $wkhubin = $this->WkhubinModel::all();
//         $kaprog = $this->KaprogModel::all();
//         $walas = $this->WalasModel::all();
//         $pengajuan = DB::table('pengajuan')
//         ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
//         ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
//         ->select('pengajuan.*', 'iduka.*', 'siswa.*')
//         ->get();
//         return view('siswa.pengajuan', compact('pengajuan','siswa','admkeu','wkhubin','kaprog','walas'), ["edit" => $pengajuan]);
//     }

//     public function tambahpengajuan(Request $request)
//     {
//         $validated = $request->validate([
//             'datanamaiduka' => 'required',
//             'datapimpinaniduka' => 'required',
//             'dataalamatiduka' => 'required',
//             'datatelpiduka' => 'required',
//             'datasiswa' => 'required',
//             'dataadmkeu' => 'required',
//             'datawkhubin' => 'required',
//             'datakaprog' => 'required',
//             'datawalas' => 'required',
//             'datatglpengajuan' => 'required',
//         ]);

//             try {
//                 $tambah_pengajuan = DB::select('CALL procedure_insert_pengajuan(?,?,?,?,?,?,?,?,?,?)', [
//                     $validated['datanamaiduka'],
//                     $validated['datapimpinaniduka'],
//                     $validated['dataalamatiduka'],
//                     $validated['datatelpiduka'],
//                     $validated['datasiswa'],
//                     $validated['dataadmkeu'],
//                     $validated['datawkhubin'],
//                     $validated['datakaprog'],
//                     $validated['datawalas'],
//                     $validated['datatglpengajuan']
//                 ]);
//                 sweetalert()->addSuccess('Data Pengajuan Berhasil Ditambah!');
//                 return redirect('/siswa/pengajuan');
//             } catch (\Throwable $th) {
//                 sweetalert()->addError('Data Pengajuan Gagal Ditambah!');
//                 return redirect('/siswa/pengajuan');
//             }
//     }


//     // public function editpengajuan(pengajuanModel $pengajuan)
//     // {
//     //     $edit = DB::table('pengajuan')
//     //         ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
//     //         ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
//     //         ->select('pengajuan.*', 'iduka.*', 'siswa.*')
//     //         ->where('id_pengajuan', '=', $pengajuan->id_pengajuan)
//     //         ->get();


//     //         return view('siswa.editpengajuan', ["edit" => $edit]);


//     // }
//     public function editpengajuan(Request $request)
//     {
//         $validated = $request->validate([
//             'nama_iduka' => 'required',
//             'pimpinan_iduka' => 'required',
//             'alamat_iduka' => 'required',
//             'telp_iduka' => 'required',
//             'tgl_pengajuan' => 'required',
//         ]);

//             try {
//                 $edit_pengajuan = DB::select('CALL procedure_update_pengajuan(?,?,?,?,?,?,?)', [
//                     $request->id_iduka,
//                     $validated['nama_iduka'],
//                     $validated['pimpinan_iduka'],
//                     $validated['alamat_iduka'],
//                     $validated['telp_iduka'],
//                     $request->id_pengajuan,
//                     $validated['tgl_pengajuan']
//                 ]);
//         } catch (Exception $e) {
//             return $e->getMessage();
//         } finally {
//             sweetalert()->addSuccess('Data Pengajuan Berhasil Diedit!');
//             return redirect('/siswa/pengajuan');
//         }
//     }

//     public function hapus($id = null)
//     {
//         try{
//             $hapusiduka = $this->IdukaModel->where('id_iduka',$id)->delete();
//             if($hapusiduka){
//                 sweetalert()->addSuccess('Data Pengajuan Berhasil Dihapus!');
//                 return redirect('siswa/pengajuan');
//             }
//         } catch(Exception $e){
//             return back()->with('error', $e->getMessage());
//         }

//     }
// }

