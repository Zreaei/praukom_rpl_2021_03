<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmkeuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaprogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PbidukaController;
use App\Http\Controllers\PbsekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\VerifikatorController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\WkhubinController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
});

// Admin
Route::get('/admin/home', [AdminController::class, 'home']);


// Route::get('/admin-home', [AdminController::class, 'index']);
Route::get('/admin-home/data-op', [AdminController::class, 'operator']);
Route::get('/admin-home/data-siswa', [AdminController::class, 'siswa']);

// Admin - home
Route::get('/adminhome', [AdminController::class, 'home']);

// Operator
Route::get('/operator/home', [OperatorController::class, 'home']);
Route::get('/operator/profile', [OperatorController::class, 'profile']);
Route::get('/operator/siswa', [OperatorController::class, 'siswa']);
Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahsiswa']);
Route::post('/operator/siswa/simpan',[OperatorController::class,'simpansiswa']);
Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editsiswa']);
Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpansiswa']);
Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapussiswa']);
Route::get('/operator/jurusan', [OperatorController::class, 'jurusan']);
Route::get('/operator/jurusan/tambah',[OperatorController::class,'tambahjurusan']);
Route::post('/operator/jurusan/simpan',[OperatorController::class,'simpanjurusan']);
Route::get('/operator/jurusan/edit/{id}',[OperatorController::class,'editjurusan']);
Route::post('/operator/jurusan/edit/editsimpan',[OperatorController::class,'editsimpanjurusan']);
Route::get('/operator/jurusan/hapus/{id}',[OperatorController::class,'hapusjurusan']);
Route::get('/operator/kaprog', [OperatorController::class, 'kaprog']);
Route::get('/operator/kaprog/tambah',[OperatorController::class,'tambahkaprog']);
Route::post('/operator/kaprog/simpan',[OperatorController::class,'simpankaprog']);
Route::get('/operator/kaprog/edit/{id}',[OperatorController::class,'editkaprog']);
Route::post('/operator/kaprog/edit/editsimpan',[OperatorController::class,'editsimpankaprog']);
Route::get('/operator/kaprog/hapus/{id}',[OperatorController::class,'hapuskaprog']);
Route::get('/operator/kelas', [OperatorController::class, 'kelas']);
Route::get('/operator/kelas/tambah',[OperatorController::class,'tambahkelas']);
Route::post('/operator/kelas/simpan',[OperatorController::class,'simpankelas']);
Route::get('/operator/kelas/edit/{id}',[OperatorController::class,'editkelas']);
Route::post('/operator/kelas/edit/editsimpan',[OperatorController::class,'editsimpankelas']);
Route::get('/operator/kelas/hapus/{id}',[OperatorController::class,'hapuskelas']);
Route::get('/operator/admkeu', [OperatorController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah',[OperatorController::class,'tambahadmkeu']);
Route::post('/operator/admkeu/simpan',[OperatorController::class,'simpanadmkeu']);
Route::get('/operator/admkeu/edit/{id}',[OperatorController::class,'editadmkeu']);
Route::post('/operator/admkeu/edit/editsimpan',[OperatorController::class,'editsimpanadmkeu']);
Route::get('/operator/admkeu/hapus/{id}',[OperatorController::class,'hapusadmkeu']);

// Siswa
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/siswa/tambah',[SiswaController::class,'formTambah']);
Route::post('/siswa/simpan',[SiswaController::class,'simpan']);
Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);
Route::post('/siswa/edit/editsimpan',[SiswaController::class,'editsimpan']);
Route::get('/siswa/hapus/{id}',[SiswaController::class,'hapus']);

// Pbsekolah
Route::get('/pbsekolah/home', [PbsekolahController::class, 'home']);

// Pbiduka
Route::get('/pbiduka/home', [PbidukaController::class, 'home']);

// Walas
Route::get('/walas/home', [WalasController::class, 'home']);

// Admkeu
Route::get('/admkeu', [AdmkeuController::class, 'admkeu']);
Route::get('/admkeu/tambah',[AdmkeuController::class,'formTambah']);
Route::post('/admkeu/simpan',[AdmkeuController::class,'simpan']);
Route::get('/admkeu/edit/{id}',[AdmkeuController::class,'edit']);
Route::post('/admkeu/edit/editsimpan',[AdmkeuController::class,'editsimpan']);
Route::get('/admkeu/hapus/{id}',[AdmkeuController::class,'hapus']);

// Wkhubin
Route::get('/wkhubin/home', [WkhubinController::class, 'home']);

// Kaprog
Route::get('/kaprog/home', [KaprogController::class, 'home']);

// Verifikator
Route::get('/verifikator/home', [VerifikatorController::class, 'home']);

// Login
Route::get('/login', [VerifikatorController::class, 'login']);

// Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
