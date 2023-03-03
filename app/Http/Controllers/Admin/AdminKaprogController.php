<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{UserModel, KaprogModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminKaprogController extends Controller
{
    protected $KaprogModel;
    protected $UserModel;

    public function __construct()
    {
        $this->KaprogModel = new KaprogModel;
        $this->UserModel = new UserModel;
    }

    public function kaprog()
    {
        $user = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get();
        $dataKaprog = DB::table('kaprog')
        ->join('user', 'user.id_user', '=', 'kaprog.user')
        ->get();
        return view('admin.data-kaprog.data-kaprog', compact('dataKaprog','user'));
    }

    public function simpan(Request $request)
    {
        $validasi = $request->validate([
            'nip_kaprog' => 'required|unique:kaprog',
            'nama_kaprog' => 'required',
            'user' => 'required',
        ]);

        if ($validasi) {
            $id_kaprog = DB::select('SELECT newidkaprog() AS id_kaprog');
            $array = Arr::pluck($id_kaprog, 'id_kaprog');
            $kode_baru = Arr::get($array, '0');
            $tambah_kaprog = DB::table('kaprog')->insert([
            'id_kaprog' => $kode_baru,
            'nip_kaprog' => $request->input('nip_kaprog'),
            'nama_kaprog' => $request->input('nama_kaprog'),
            'user' => $request->input('user'),
            // dd($request->all())
        ]);

            //Promise 
            if ($tambah_kaprog) {
                sweetalert()->addSuccess('Kaprog Berhasil Ditambah');
                return redirect('admin/data-kaprog');
            } else {
                sweetalert()->addError('Kaprog Gagal Ditambah');
                return redirect('admin/data-kaprog');
            }
        } else {
            sweetalert()->addError('Kaprog Gagal Ditambah');
            return redirect('admin/data-kaprog');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'nip_kaprog' => 'required',
            'nama_kaprog' => 'required',
            'user' => 'required',
        ]);

        if($validasi) {
            $data = [
                'nip_kaprog' => $request->input('nip_kaprog'),
                'nama_kaprog' => $request->input('nama_kaprog'),
                'user' => $request->input('user'),
                // dd($request->all())
            ];
            $upd = $this->KaprogModel
                        ->where('id_kaprog', $request->input('id_kaprog'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('Kaprog Berhasil Di Edit');
                return redirect('admin/data-kaprog');
            } else {
                sweetalert()->addError('Kaprog Gagal Di Edit');
                return redirect('admin/data-kaprog');
            }
        } else {
            sweetalert()->addError('Kaprog Gagal Di Edit');
            return redirect('admin/data-kaprog');
        }
    }

    public function hapus($id = null){
        $hapus = $this->KaprogModel
                        ->where('id_kaprog',$id)
                        ->delete();
        if($hapus){
            sweetalert()->addSuccess('Kaprog Berhasil Dihapus');
            return redirect('admin/data-kaprog');
        } else {
            sweetalert()->addError('Kaprog Gagal Dihapus');
            return redirect('admin/data-kaprog');
        }
    }
}
