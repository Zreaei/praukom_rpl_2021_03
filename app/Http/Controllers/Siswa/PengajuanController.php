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
use Illuminate\Support\Facades\Auth;
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
                sweetalert()->addSuccess('Data Pengajuan Berhasil Ditambah!');
                return redirect('/siswa/pengajuan');
            } catch (\Throwable $th) {
                sweetalert()->addError('Data Pengajuan Gagal Ditambah!');
                return redirect('/siswa/pengajuan');
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
            sweetalert()->addSuccess('Data Pengajuan Berhasil Diedit!');
            return redirect('/siswa/pengajuan');
        }
    }

    public function hapus($id = null)
    {
        try{
            $hapusiduka = $this->IdukaModel->where('id_iduka',$id)->delete();
            if($hapusiduka){
                sweetalert()->addSuccess('Data Pengajuan Berhasil Dihapus!');
                return redirect('siswa/pengajuan');
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }
}
