<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PengajuanModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    //
    // public function home() 
    // {
    //     return view('siswa.home');
    // }
    // public function profil() 
    // {
    //     return view('siswa.profil');
    // }
    // protected $PengajuanModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
    }
    public function pengajuan()
    {
        //menampilkan seluruh pengajuan
        $pengajuan = DB::select('SELECT * from surat_pengajuan');
        return view('siswa.pengajuan',compact('pengajuan'));
    }
    public function tambahpengajuan()
    {
        return view('siswa.tambahpengajuan');
    }
    
    public function simpan(Request $request)
    {
        $pengajuan = DB::select('SELECT * from surat_pengajuan');
        $pengajuan = new PengajuanModel();
        $pengajuan->id_surat = $request->id_surat;
        $pengajuan->tanggal_pengajuan = $request->tanggal_pengajuan;
        $pengajuan->nama_perusahaan = $request->nama_perusahaan;
        $pengajuan->alamat_perusahaan = $request->alamat_perusahaan;
        $pengajuan->pimpinan_perusahaan = $request->pimpinan_perusahaan;
        $pengajuan->telp_perusahaan = $request->telp_perusahaan;
        $pengajuan->save();
        return redirect('/siswa/pengajuan')->with('Success', 'Data Berhasil disimpan');
    }

    public function editpengajuan($id)
    {
        $pengajuan = PengajuanModel::whereIdSurat($id)->first();
        return view('siswa.editpengajuan', compact('pengajuan'));
        
    }
    public function editsimpan(Request $request, $id)
    {
        $pengajuan = PengajuanModel::findorfail($id);
        $pengajuan->update($request->all());
        return redirect('/siswa/pengajuan')->with('success', 'Data Berhasil diupdate');
        
    }

    public function hapus($id)
    {
        $pengajuan = PengajuanModel::findorfail($id);
        $pengajuan->delete();
        return redirect('/siswa/pengajuan')->with('success', 'Data Berhasil dihapus');
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
