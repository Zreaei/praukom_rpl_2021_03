<?php

use App\Http\Controllers\{
    Admin\AdminController,
    Admin\UserController,
    Admin\DataOperatorController,
    Admin\DataJurusanController,
    Admin\DataKelasController,
    Admin\DataAngkatanController,
    Siswa\SiswaController,
    Operator\OperatorController,
    AdmKeu\AdmkeuController,
    Kaprog\KaprogController,
    Operator\DataAdmkeuController,
    Operator\DataWkhubinController,
    Operator\DataKaprogController,
    Operator\DataWalasController,
    Operator\DataPbsekolahController,
    Operator\DataPbidukaController,
    Operator\DataVerifikatorController,
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

// Admin - Data Level
Route::get('admin/data-level', [UserController::class, 'level']);

// Admin - Kelola User
Route::get('/admin/data-user',[UserController::class, 'user']);
Route::get('/admin/data-user/tambah',[UserController::class, 'tambahUser']);
Route::post('/admin/data-user/simpan',[UserController::class, 'simpan']);
Route::get('/admin/data-user/hapus/{id}',[UserController::class, 'hapus']);
Route::get('/admin/data-user/edit/{id}',[UserController::class, 'edit']);
Route::post('/admin/data-user/edit/simpanedit',[UserController::class,'simpanedit']);

// Admin - Kelola Operator
Route::get('/admin/data-op', [DataOperatorController::class, 'operator']);
Route::get('/admin/data-op/tambah', [DataOperatorController::class, 'tambahOpr']);
Route::post('/admin/data-op/simpan',[DataOperatorController::class, 'simpan']);
Route::get('/admin/data-op/hapus/{id}',[DataOperatorController::class,'hapus']);
Route::get('/admin/data-op/edit/{id}',[DataOperatorController::class, 'edit']);
Route::post('/admin/data-op/edit/simpanedit',[DataOperatorController::class,'simpanedit']);

// Admin - Kelola Angkatan
Route::get('/admin/data-angkatan', [DataAngkatanController::class, 'angkatan']);

// Operator
Route::get('/operator', [OperatorController::class, 'index']);
Route::get('/operator/admkeu', [OperatorController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah', [OperatorController::class, 'tambahadmkeu']);
Route::post('/operator/admkeu/simpan',[OperatorController::class, 'simpan']);
Route::get('/operator/admkeu/hapus/{id}',[OperatorController::class,'hapus']);
Route::get('/operator/admkeu/edit/{id}',[OperatorController::class, 'edit']);
Route::post('/operator/admkeu/edit/simpanedit',[OperatorController::class,'simpanedit']);

// // Operator
// Route::get('/operator/home', [OperatorController::class, 'home']);
// Route::get('/operator/profile', [OperatorController::class, 'profile']);
// // Route::get('/operator/siswa', [OperatorController::class, 'siswa']);
// // Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahSiswa']);
// // Route::post('/operator/siswa/simpan',[OperatorController::class,'simpanSiswa']);
// // Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editSiswa']);
// // Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpanSiswa']);
// // Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapusSiswa']);
// Route::get('/operator/admkeu', [OperatorController::class, 'admkeu']);
// Route::get('/operator/admkeu/tambah',[OperatorController::class,'tambahadmkeu']);
// Route::post('/operator/admkeu/simpan',[OperatorController::class,'simpanadmkeu']);
// Route::get('/operator/admkeu/edit/{id}',[OperatorController::class,'editadmkeu']);
// Route::post('/operator/admkeu/edit/editsimpan',[OperatorController::class,'editsimpanadmkeu']);
// Route::get('/operator/admkeu/hapus/{id}',[OperatorController::class,'hapusadmkeu']);

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
