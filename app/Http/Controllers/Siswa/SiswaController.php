<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PengajuanModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    protected $PengajuanModel;
    public function __construct()
    {
        $this->PengajuanModel = new PengajuanModel;
    }
    public function pengajuan()
    {
        //menampilkan seluruh pengajuan
        $pengajuan = DB::select('SELECT * from pengajuan');
        return view('siswa.pengajuan', compact('pengajuan'));
    }
    public function tambahpengajuan()
    {
        return view('siswa.tambahpengajuan');
    }

    public function simpan(Request $request)
    {
        $pengajuan = DB::select('SELECT * from pengajuan');
        $pengajuan = new PengajuanModel();


        $id_pengajuan = DB::select('SELECT newidpengajuan() AS id_pengajuan');
        $array = Arr::pluck($id_pengajuan, 'id_pengajuan');
        $kode_baru = Arr::get($array, '0');

        $siswa = DB::table('siswa')
            ->join('siswa', 'siswa.nis', '=', 'pengajuan.siswa')
            ->get();
        $tambah_pengajuan = DB::table('pengajuan')->insert([
            'id_pengajuan' => $kode_baru,
            'siswa' => $request->input('siswa'),
            'keterangan_agenda' => $request->input('keterangan_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda'),

        ]);
        if ($tambah_pengajuan) {
            return redirect('siswa/pengajuan');
        } else {
            return "input data gagal";
        }
        // $pengajuan->siswa = $request->siswa;
        // $pengajuan->iduka = $request->iduka;
        // $pengajuan->adm_keuangan = $request->adm_keuangan;
        // $pengajuan->waka_hubin = $request->waka_hubin;
        // $pengajuan->kaprog = $request->kaprog;
        // $pengajuan->walas = $request->walas;
        // $pengajuan->tgl_pengajuan = $request->tgl_pengajuan;
        // $pengajuan->konfirmasi_admkeu = $request->konfirmasi_admkeu;
        // $pengajuan->konfirmasi_wkhubin = $request->konfirmasi_wkhubin;
        // $pengajuan->konfirmasi_kaprog = $request->konfirmasi_kaprog;
        // $pengajuan->konfirmasi_walas = $request->konfirmasi_walas;
        // $pengajuan->save();
        // return redirect('/siswa/pengajuan')->with('Success', 'Data Berhasil disimpan');
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
