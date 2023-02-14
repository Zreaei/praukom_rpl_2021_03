<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PengajuanModel;
use App\Models\SiswaModel;
use App\Models\IdukaModel;
use App\Models\AdmkeuModel;
use App\Models\WkhubinModel;
use App\Models\KaprogModel;
use App\Models\WalasModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
    protected $PengajuanModel;
    protected $SiswaModel;
    protected $IdukaModel;
    protected $AdmkeuModel;
    protected $WkhubinModel;
    protected $KaprogModel;
    protected $WalasModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
        $this->SiswaModel = new SiswaModel;
        $this->IdukaModel = new IdukaModel;
        $this->AdmkeuModel = new AdmkeuModel;
        $this->WkhubinModel = new WkhubinModel;
        $this->KaprogModel = new KaprogModel;
        $this->WalasModel = new WalasModel;
    }
    private function generateIdPengajuan(): string
    {
        return collect(DB::select('SELECT generate_new_id_pengajuan() AS new_id_pengajuan'))
        ->firstOrFail()
        ->new_id_pengajuan;
    }
    public function pengajuan()
    {
        $pengajuan = $this->PengajuanModel::all();
        $siswa = $this->SiswaModel::all();
        $admkeu = $this->AdmkeuModel::all();
        $wkhubin = $this->WkhubinModel::all();
        $kaprog = $this->KaprogModel::all();
        $walas = $this->WalasModel::all();
        $pengajuan = DB::table('pengajuan')
        ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
        ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
        ->select('pengajuan.*', 'iduka.*', 'siswa.*')
        ->get();
        return view('siswa.pengajuan', compact('pengajuan','siswa','admkeu','wkhubin','kaprog','walas'), ["edit" => $pengajuan]);
    }

    public function tambahpengajuan(Request $request)
    {
        $validated = $request->validate([
            'datanamaiduka' => 'required',
            'datapimpinaniduka' => 'required',
            'dataalamatiduka' => 'required',
            'datatelpiduka' => 'required',
            'datasiswa' => 'required',
            'dataadmkeu' => 'required',
            'datawkhubin' => 'required',
            'datakaprog' => 'required',
            'datawalas' => 'required',
            'datatglpengajuan' => 'required',
        ]);

            try {
                $tambah_pengajuan = DB::select('CALL procedure_insert_pengajuan(?,?,?,?,?,?,?,?,?,?)', [
                    $validated['datanamaiduka'],
                    $validated['datapimpinaniduka'],
                    $validated['dataalamatiduka'],
                    $validated['datatelpiduka'],
                    $validated['datasiswa'],
                    $validated['dataadmkeu'],
                    $validated['datawkhubin'],
                    $validated['datakaprog'],
                    $validated['datawalas'],
                    $validated['datatglpengajuan']
                ]);
                // if ($tambah_pengajuan){
                //     flash()->options([
                //         'timeout' => 3000, // 3 seconds
                //         'position' => 'top-center',
                //     ])->addSuccess('Data berhasil disimpan.');
                //     return redirect('/siswa/pengajuan');
                // }else
                //     return "input data gagal";
                // } catch (\Exception $e) {
                // return  $e->getMessage();
                // }

                return redirect('/siswa/pengajuan')->with('sukses', 'Data berhasil ditambah');
            } catch (\Throwable $th) {
                return redirect('/siswa/pengajuan')->with('error', 'Data gagal ditambah');
            }
    }


    // public function editpengajuan(pengajuanModel $pengajuan)
    // {
    //     $edit = DB::table('pengajuan')
    //         ->join('iduka', 'iduka.id_iduka', '=', 'pengajuan.iduka')
    //         ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
    //         ->select('pengajuan.*', 'iduka.*', 'siswa.*')
    //         ->where('id_pengajuan', '=', $pengajuan->id_pengajuan)
    //         ->get();


    //         return view('siswa.editpengajuan', ["edit" => $edit]);


    // }
    public function editpengajuan(Request $request)
    {
        $validated = $request->validate([
            'nama_iduka' => 'required',
            'pimpinan_iduka' => 'required',
            'alamat_iduka' => 'required',
            'telp_iduka' => 'required',
            'tgl_pengajuan' => 'required',
        ]);

            try {
                $edit_pengajuan = DB::select('CALL procedure_update_pengajuan(?,?,?,?,?,?,?)', [
                    $request->id_iduka,
                    $validated['nama_iduka'],
                    $validated['pimpinan_iduka'],
                    $validated['alamat_iduka'],
                    $validated['telp_iduka'],
                    $request->id_pengajuan,
                    $validated['tgl_pengajuan']
                ]);
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            return redirect('/siswa/pengajuan');
        }
    }

    public function hapus($id = null)
    {
        try{
            $hapusiduka = $this->IdukaModel->where('id_iduka',$id)->delete();
            if($hapusiduka){
                return redirect('siswa/pengajuan');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }


















    // try{
    //     $hapus = $this->PengajuanModel
    //                     ->where('id_surat',$id)
    //                     ->delete();
    //     if($hapus){
    //         return redirect('siswa');
    //     }
    // }catch(Exception $e){
    //     $e->getMessage();
    // }

    // public function tambah(Request $request)
    // {
    //     $request->validate([
    //         'id_pengajuan' => 'required|min:6',
    //         'siswa' => 'required|min:9',
    //         'iduka' => 'required|min:6',
    //         'adm_keuangan' => 'required|min:9',
    //         'waka_hubin' => 'required|min:9',
    //         'kaprog' => 'required|min:9',
    //         'walas' => 'required|min:9',
    //         'konfirmasi_admkeu' => ['terima','Tolak'],
    //         'konfirmasi_wkhubin' => ['terima','Tolak'],
    //         'konfirmasi_kaprog' => ['terima','Tolak'],
    //         'konfirmasi_walas' => ['terima','Tolak'],

    //     ]);

    //     $pengajuan = new pengajuan;
    //     $pengajuan->id_pengajuan = $request->id_pengajuan;
    //     $pengajuan->siswa = $request->siswa;
    //     $pengajuan->iduka = $request->iduka;
    //     $pengajuan->adm_keuangan = $request->adm_keuangan;
    //     $pengajuan->waka_hubin = $request->waka_hubin;
    //     $pengajuan->kaprog = $request->kaprog;
    //     $pengajuan->walas = $request->walas;
    //     $pengajuan->konfirmasi_admkeu = $request->konfirmasi_admkeu;
    //     $pengajuan->konfirmasi_wkhubin = $request->konfirmasi_wkhubin;
    //     $pengajuan->konfirmasi_kaprog = $request->konfirmasi_kaprog;
    //     $pengajuan->konfirmasi_walas = $request->konfirmasi_walas;
    //     $pengajuan->save();

    //     return to_route('siswa.pengajuan')->with('success','Data Berhasil di Tambah');
    // }
}
