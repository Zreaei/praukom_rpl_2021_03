<?php

namespace App\Http\Controllers\Siswa;

use App\Models\PresensiModel;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class PresensiController extends Controller
{
    protected $PresensiModel;

    public function __construct()
    {
        $this->PresensiModel = new PresensiModel;
    }
    public function presensi()
    {
        //menampilkan seluruh presensi
        $presensi = DB::select('SELECT * from agenda');
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
        // $presensi->id_agenda = $request->id_agenda;
        // $presensi->status_agenda = $request->status_agenda;
        // $presensi->keterangan_agenda = $request->keterangan_agenda;
        // $presensi->tgl_agenda = $request->tgl_agenda;

        $id_agenda = DB::select('SELECT newidagenda() AS id_agenda');
        $array = Arr::pluck($id_agenda, 'id_agenda');
        $kode_baru = Arr::get($array, '0');
        $tambah_agenda = DB::table('agenda')->insert([
            'id_agenda' => $kode_baru,
            'status_agenda' => $request->input('status_agenda'),
            'keterangan_agenda' => $request->input('keterangan_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda'),
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('storage/img/', $filename);
            $presensi->foto = $filename;
        }

        if ($tambah_agenda) {
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
        $presensi->save();
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
