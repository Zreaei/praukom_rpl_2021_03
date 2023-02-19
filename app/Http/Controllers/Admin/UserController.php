<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\LevelModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $LevelModel;
    protected $UserModel;
    
    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->LevelModel = new LevelModel;
    }
    
    public function user()
    {
        // $dataUser = $this->UserModel::all();
        $level = $this->LevelModel::all();
        $dataUser = DB::table('user')
        ->join('level_user', 'level_user.id_level', '=', 'user.level')
        ->get(); 
        return view('admin.data-user.data-user', compact('dataUser','level'));
    }

    public function simpan(Request $request)
    {
        // $data = [
        //     'username' => $request->input('username'),
        //     'password' => $request->input('password'),
        //     'email' => $request->input('email'),
        //     'level' => $request->input('level'),
        //     // dd($request->all())
        // ];

        $validasi = $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        if ($validasi) {
            $id_user = DB::select('SELECT newiduser() AS id_user');
            $array = Arr::pluck($id_user, 'id_user');
            $kode_baru = Arr::get($array, '0');
            $tambah_user = DB::table('user')->insert([
            'id_user' => $kode_baru,
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
        ]);

        //Promise 
        if ($tambah_user) {
            sweetalert()->addSuccess('User Berhasil Ditambah');
            return redirect('admin/data-user');
        } else {
            sweetalert()->addSuccess('User Gagal Ditambah');
            return redirect('admin/data-user');
        }

        } else {
            sweetalert()->addSuccess('User Gagal Ditambah');
            return redirect('admin/data-user');
        }
    }

    public function simpanedit(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        if($validasi) {
            $data = [
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
                'email' => $request->input('email'),
                'level' => $request->input('level'),
                // dd($request->all())
            ];
            $upd = $this->UserModel
                        ->where('id_user', $request->input('id_user'))
                        ->update($data);
            if($upd){
                sweetalert()->addSuccess('User Berhasil Di Edit');
                return redirect('admin/data-user');
            } else {
                sweetalert()->addSuccess('User Gagal Di Edit');
                return redirect('admin/data-user');
            }
        }
    }

    public function hapus($id = null){
        try{
            $hapus = $this->UserModel
                            ->where('id_user',$id)
                            ->delete();
            if($hapus){
                sweetalert()->addSuccess('User Berhasil Dihapus');
                return redirect('admin/data-user');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
