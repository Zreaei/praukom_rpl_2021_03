<?php

use App\Http\Controllers\{
    Admin\AdminController,
    Siswa\SiswaController,
    AdmKeu\AdmkeuController,
    DataOperatorController,
    Kaprog\KaprogController,
    Operator\OperatorController,
    PbIduka\PbidukaController,
    PbSekolah\PbsekolahController,
    Verifikator\VerifikatorController,
    Walas\WalasController,
    WkHubin\WkhubinController,
    HomeController,
    LoginController,
};

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
    return view('login.login');
});

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/data-op', [AdminController::class, 'operator']);
Route::get('/admin/data-op/tambah',[DataOperatorController::class, 'tambahOpr']);
Route::post('/admin/data-op/simpan',[DataOperatorController::class, 'simpan']);
Route::get('/admin/edit/{id}',[DataOperatorController::class, 'edit']);
Route::post('/admin/edit/simpanedit',[DataOperatorController::class,'simpanedit']);
Route::get('/admin/hapus/{id}',[DataOperatorController::class,'hapus']);

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
Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahSiswa']);
Route::post('/operator/siswa/simpan',[OperatorController::class,'simpanSiswa']);
Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editSiswa']);
Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpanSiswa']);
Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapusSiswa']);

// Siswa
Route::get('/siswa/home', [SiswaController::class, 'home']);
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
Route::get('/admkeu/home', [AdmkeuController::class, 'home']);
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
