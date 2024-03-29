<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{OperatorModel,UserModel};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminOperatorController extends Controller
{
    protected $UserModel;
    protected $OperatorModel; 

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->OperatorModel = new OperatorModel;
    }

    public function operator()
    {
        $dataOp = DB::table('operator')
        ->join('user', 'user.id_user', '=', 'operator.user')
        ->get();
        return view('admin.data-op.data-op', compact('dataOp'));
    }

    // public function tambahOpr()
    // {
    //     // $user = $this->UserModel::all();
    //     $user = DB::table('user')->get(); 
    //     return view('admin.data-op.tambahop', compact('user'));
    // }

    // public function simpan(Request $request)
    // {
    //     try {
    //         // $data = [
    //         //     'user' => $request->input('user'),
    //         //     // 'user' => substr(md5(rand(0, 99999)), -4),
    //         //     'nama_operator' => $request->input('nama_operator'),
    //         //     // dd($request->all())
    //         // ];
         
    //         // $id_operator = substr(md5(rand(0, 99999)), -4);
    //         // $data['id_operator'] = $id_operator;
    //         // $insert = $this->OperatorModel->create($data);
    //         // //Promise 
    //         $id_operator = DB::select('SELECT newidoperator() AS id_operator');
    //         $array = Arr::pluck($id_operator, 'id_operator');
    //         $kode_baru = Arr::get($array, '0');
    //         $tambah_opr = DB::table('operator')->insert([
    //             'id_operator' => $kode_baru,
    //             'user' => $request->input('user'),
    //         ]);

    //         if ($tambah_opr) {
    //             return redirect('admin/data-op');
    //         } else {
    //             return ('input data gagal');
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function edit($id = null)
    // {

    //     $edit = $this->OperatorModel->find($id);
    //     return view('admin.data-op.editop', $edit);
    // }
    
    // public function simpanedit (Request $request)
    // {
    //     try {
    //         $data = [
    //             'id_operator' => $request->input('id_operator'),
    //             'nama_operator' => $request->input('nama_operator'),
    //         ];
    //         $upd = $this->OperatorModel
    //                     ->where('id_operator', $request->input('id_operator'))
    //                     ->update($data);
    //         if($upd){
    //             return redirect('admin/data-op');
    //         } else {
    //             // dd($request->all());
    //         }
    //     } catch (Exception $e) {
    //         return $e->getMessage();
    //     }
    // }

    // public function hapus($id=null){
    //     try{
    //         $hapus = $this->OperatorModel
    //                         ->where('id_operator',$id)
    //                         ->delete();
    //         if($hapus){
    //             return redirect('admin/data-op');
    //         }
    //     }catch(Exception $e){
    //         $e->getMessage();
    //     }
    // }
    

}

