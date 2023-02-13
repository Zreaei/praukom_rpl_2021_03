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
        //menampilkan seluruh presensi
        $presensi = DB::select('SELECT * from presensi');
        return view('siswa.presensi',compact('presensi'));
    }

    public function tambahpresensi()
    {
        return view('siswa.tambahpresensi');
    }
    
    public function simpanpresensi(Request $request)
    {
        $presensi = DB::select('SELECT * from agenda');
        $presensi = new PresensiModel();
        $id_agenda = DB::select('SELECT newidagenda() AS id_agenda');
        $array = Arr::pluck($id_agenda, 'id_agenda');
        $kode_baru = Arr::get($array, '0');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage/img/', $filename);
            $presensi->foto = $filename;
        }
        $tambah_presensi = DB::table('agenda')->insert([
            'id_agenda' => $kode_baru,
            'status_agenda' => $request->input('status_agenda'),
            'keterangan_agenda' => $request->input('keterangan_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda'),
            'foto' => $presensi->foto,
            
        ]);

        if ($tambah_presensi) {
            return redirect('siswa/presensi');
        } else {
            return "input data gagal";
        }

        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;
        //     $file->move('storage/img/', $filename);
        //     $presensi->foto = $filename;
        // }
        
        // return redirect('/siswa/presensi')->with('Success', 'Data Berhasil disimpan');
    }

    public function editpresensi($id)
    {
        $presensi = PresensiModel::whereIdAgenda($id)->first();
        return view('siswa.editpresensi', compact('presensi'));
        
    }
    public function editsimpan(Request $request, $id)
    {
        $presensi = PresensiModel::findorfail($id);
        $presensi->update($request->all());
        return redirect('/siswa/presensi')->with('success', 'Data Berhasil diupdate');
        
    }

    public function hapus($id)
    {
        $presensi = PresensiModel::findorfail($id);
        $presensi->delete();
        return redirect('/siswa/presensi')->with('success', 'Data Berhasil dihapus');
    }
}
