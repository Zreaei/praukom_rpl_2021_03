<?php

use App\Http\Controllers\{
    Admin\AdminController,
    Admin\UserController,
    Siswa\SiswaController,
    AdmKeu\AdmkeuController,
    Kaprog\KaprogController,
    Operator\OperatorController,
    Operator\DataAdmkeuController,
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
Route::get('/admin/data-op/tambah', [AdminController::class, 'tambahOpr']);
Route::post('/admin/data-op/simpan',[AdminController::class, 'simpan']);
Route::get('/admin/data-op/hapus/{id}',[AdminController::class,'hapus']);
Route::get('/admin/data-op/edit/{id}',[AdminController::class, 'edit']);
Route::post('/admin/data-op/edit/simpanedit',[AdminController::class,'simpanedit']);

// Admin - Kelola User
Route::get('/admin/data-user',[UserController::class, 'user']);
Route::get('/admin/data-user/tambah',[UserController::class, 'tambahUser']);
Route::post('/admin/data-user/simpan',[UserController::class, 'simpan']);
Route::get('/admin/data-user/hapus/{id}',[UserController::class, 'hapus']);
Route::get('/admin/data-user/edit/{id}',[UserController::class, 'edit']);
Route::post('/admin/data-user/edit/simpanedit',[UserController::class,'simpanedit']);

// Operator
Route::get('/operator/home', [OperatorController::class, 'home']);
Route::get('/operator/profile', [OperatorController::class, 'profile']);
// Route::get('/operator/siswa', [OperatorController::class, 'siswa']);
// Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahSiswa']);
// Route::post('/operator/siswa/simpan',[OperatorController::class,'simpanSiswa']);
// Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editSiswa']);
// Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpanSiswa']);
// Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapusSiswa']);
Route::get('/operator/admkeu', [DataAdmkeuController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah',[DataAdmkeuController::class,'tambahadmkeu']);
Route::post('/operator/admkeu/simpan',[DataAdmkeuController::class,'simpanadmkeu']);
Route::get('/operator/admkeu/edit/{id}',[DataAdmkeuController::class,'editadmkeu']);
Route::post('/operator/admkeu/edit/editsimpan',[DataAdmkeuController::class,'editsimpanadmkeu']);
Route::get('/operator/admkeu/hapus/{id}',[DataAdmkeuController::class,'hapusadmkeu']);

// Siswa - home
Route::get('/siswa/home', [SiswaController::class, 'home']);
Route::get('/siswa/profil', [SiswaController::class, 'profil']);

// // Siswa
// Route::get('/siswa/home', [SiswaController::class, 'home']);
// Route::get('/siswa', [SiswaController::class, 'siswa']);
// Route::get('/siswa/tambah',[SiswaController::class,'formTambah']);
// Route::post('/siswa/simpan',[SiswaController::class,'simpan']);
// Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);
// Route::post('/siswa/edit/editsimpan',[SiswaController::class,'editsimpan']);
// Route::get('/siswa/hapus/{id}',[SiswaController::class,'hapus']);


// // Pbiduka
// Route::get('/pbiduka/home', [PbidukaController::class, 'home']);

// // Walas
// Route::get('/walas/home', [WalasController::class, 'home']);

// // Admkeu
// Route::get('/admkeu/home', [AdmkeuController::class, 'home']);
// Route::get('/admkeu', [AdmkeuController::class, 'admkeu']);
// Route::get('/admkeu/tambah',[AdmkeuController::class,'formTambah']);
// Route::post('/admkeu/simpan',[AdmkeuController::class,'simpan']);
// Route::get('/admkeu/edit/{id}',[AdmkeuController::class,'edit']);
// Route::post('/admkeu/edit/editsimpan',[AdmkeuController::class,'editsimpan']);
// Route::get('/admkeu/hapus/{id}',[AdmkeuController::class,'hapus']);

// // Wkhubin
// Route::get('/wkhubin/home', [WkhubinController::class, 'home']);

// // Kaprog
// Route::get('/kaprog/home', [KaprogController::class, 'home']);

// // Verifikator
// Route::get('/verifikator/home', [VerifikatorController::class, 'home']);

// // Login
// Route::get('/login', [VerifikatorController::class, 'login']);

// // Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
