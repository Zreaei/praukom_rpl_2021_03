<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JurusanModel;
use App\Models\KaprogModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DataJurusanController extends Controller
{
    protected $JurusanModel;
    protected $KaprogModel;

    public function __construct()   
    {
        $this->JurusanModel = new JurusanModel;
        $this->KaprogModel = new KaprogModel;
    }

    public function jurusan()
    {
        $dataJurusan = $this->JurusanModel::all();
        return view('admin.data-jurusan.data-jurusan', compact('dataJurusan'));
    }

    // public function kaprog()
    // {
    //     $kaprog = $this->KaprogModel::all();
    //     return view('admin.data-jurusan.data-jurusan', compact('dataJurusan'));
    // }

    public function tambahJurusan()
    {
        $kaprog = $this->KaprogModel::all();
        return view('admin.data-jurusan.tambahjurusan', compact('kaprog'));
    }

    public function simpan(Request $request)
    {
        try {
            $id_jurusan = DB::select('SELECT newidjurusan() AS id_jurusan');
            $array = Arr::pluck($id_jurusan, 'id_jurusan');
            $kode_baru = Arr::get($array, '0');
            $tambah_jurusan = DB::table('jurusan')->insert([
                'id_jurusan' => $kode_baru,
                'bidang_keahlian' => $request->input('bidang_keahlian'),
                'program_keahlian' => $request->input('program_keahlian'),
                'kaprog' => $request->input('kaprog'),
            ]);
            if ($tambah_jurusan) {
                return redirect('admin/data-jurusan');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit($id = null)
    {

        $edit = $this->JurusanModel->find($id);
        $kaprog = $this->KaprogModel::all();
        // echo json_encode($edit);
        return view('admin.data-jurusan.editjurusan', compact('edit','kaprog'));
    }

    public function simpanedit(Request $request)
    {
        try {
            $data = [
                'kaprog' => $request->input('kaprog'),
                'bidang_keahlian' => $request->input('bidang_keahlian'),
                'program_keahlian' => $request->input('program_keahlian'),
                // dd($request->all())
            ];
            $upd = $this->JurusanModel
                        ->where('id_jurusan', $request->input('id_jurusan'))
                        ->update($data);
            if($upd){
                return redirect('admin/data-jurusan');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id = null)
    {
        try{
            $hapus = $this->JurusanModel
                            ->where('id_jurusan',$id)
                            ->delete();
            if($hapus){
                return redirect('admin/data-jurusan');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
