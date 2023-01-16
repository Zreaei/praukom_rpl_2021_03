<?php

use App\Http\Controllers\{
    Admin\AdminController,
    Admin\UserController,
    Admin\DataOperatorController,
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

// Admin - Kelola Operator
Route::get('/admin/data-op', [DataOperatorController::class, 'operator']);
Route::get('/admin/data-op/tambah', [DataOperatorController::class, 'tambahOpr']);
Route::post('/admin/data-op/simpan',[DataOperatorController::class, 'simpan']);
Route::get('/admin/data-op/hapus/{id}',[DataOperatorController::class,'hapus']);
Route::get('/admin/data-op/edit/{id}',[DataOperatorController::class, 'edit']);
Route::post('/admin/data-op/edit/simpanedit',[DataOperatorController::class,'simpanedit']);

// Admin - Kelola User
Route::get('/admin/data-user',[UserController::class, 'user']);
Route::get('/admin/data-user/tambah',[UserController::class, 'tambahUser']);
Route::post('/admin/data-user/simpan',[UserController::class, 'simpan']);
Route::get('/admin/data-user/hapus/{id}',[UserController::class, 'hapus']);
Route::get('/admin/data-user/edit/{id}',[UserController::class, 'edit']);
Route::post('/admin/data-user/edit/simpanedit',[UserController::class,'simpanedit']);

// Operator - Dashboard
Route::get('/operator/home', [OperatorController::class, 'home']);
Route::get('/operator/profile', [OperatorController::class, 'profile']);

// Operator - Kelola Admkeu
Route::get('/operator/admkeu', [DataAdmkeuController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah',[DataAdmkeuController::class,'tambahadmkeu']);
Route::post('/operator/admkeu/tambah/tambahsimpan',[DataAdmkeuController::class,'simpanadmkeu']);
Route::get('/operator/admkeu/edit/{id}',[DataAdmkeuController::class,'editadmkeu']);
Route::post('/operator/admkeu/edit/editsimpan',[DataAdmkeuController::class,'editsimpanadmkeu']);
Route::get('/operator/admkeu/hapus/{id}',[DataAdmkeuController::class,'hapususer']);

// Operator - Kelola Wkhubin
Route::get('/operator/wkhubin', [DataWkhubinController::class, 'wkhubin']);
Route::get('/operator/wkhubin/tambah',[DataWkhubinController::class,'tambahwkhubin']);
Route::post('/operator/wkhubin/tambah/tambahsimpan',[DataWkhubinController::class,'simpanwkhubin']);
Route::get('/operator/wkhubin/edit/{id}',[DataWkhubinController::class,'editwkhubin']);
Route::post('/operator/wkhubin/edit/editsimpan',[DataWkhubinController::class,'editsimpanwkhubin']);
Route::get('/operator/wkhubin/hapus/{id}',[DataWkhubinController::class,'hapususer']);

// Operator - Kelola Pbsekolah
Route::get('/operator/pbsekolah', [DataPbsekolahController::class, 'pbsekolah']);
Route::get('/operator/pbsekolah/tambah',[DataPbsekolahController::class,'tambahpbsekolah']);
Route::post('/operator/pbsekolah/tambah/tambahsimpan',[DataPbsekolahController::class,'simpanpbsekolah']);
Route::get('/operator/pbsekolah/edit/{id}',[DataPbsekolahController::class,'editpbsekolah']);
Route::post('/operator/pbsekolah/edit/editsimpan',[DataPbsekolahController::class,'editsimpanpbsekolah']);
Route::get('/operator/pbsekolah/hapus/{id}',[DataPbsekolahController::class,'hapususer']);

// Operator - Kelola Pbiduka
Route::get('/operator/pbiduka', [DataPbidukaController::class, 'pbiduka']);
Route::get('/operator/pbiduka/tambah',[DataPbidukaController::class,'tambahpbiduka']);
Route::post('/operator/pbiduka/tambah/tambahsimpan',[DataPbidukaController::class,'simpanpbiduka']);
Route::get('/operator/pbiduka/edit/{id}',[DataPbidukaController::class,'editpbiduka']);
Route::post('/operator/pbiduka/edit/editsimpan',[DataPbidukaController::class,'editsimpanpbiduka']);
Route::get('/operator/pbiduka/hapus/{id}',[DataPbidukaController::class,'hapususer']);

// Operator - Kelola Kaprog
Route::get('/operator/kaprog', [DataKaprogController::class, 'kaprog']);
Route::get('/operator/kaprog/tambah',[DataKaprogController::class,'tambahkaprog']);
Route::post('/operator/kaprog/tambah/tambahsimpan',[DataKaprogController::class,'simpankaprog']);
Route::get('/operator/kaprog/edit/{id}',[DataKaprogController::class,'editkaprog']);
Route::post('/operator/kaprog/edit/editsimpan',[DataKaprogController::class,'editsimpankaprog']);
Route::get('/operator/kaprog/hapus/{id}',[DataKaprogController::class,'hapususer']);

// Operator - Kelola Walas
Route::get('/operator/walas', [DataWalasController::class, 'walas']);
Route::get('/operator/walas/tambah',[DataWalasController::class,'tambahwalas']);
Route::post('/operator/walas/tambah/tambahsimpan',[DataWalasController::class,'simpanwalas']);
Route::get('/operator/walas/edit/{id}',[DataWalasController::class,'editwalas']);
Route::post('/operator/walas/edit/editsimpan',[DataWalasController::class,'editsimpanwalas']);
Route::get('/operator/walas/hapus/{id}',[DataWalasController::class,'hapususer']);

// Operator - Kelola Verifikator
Route::get('/operator/verifikator', [DataVerifikatorController::class, 'verifikator']);
Route::get('/operator/verifikator/tambah',[DataVerifikatorController::class,'tambahverifikator']);
Route::post('/operator/verifikator/tambah/tambahsimpan',[DataVerifikatorController::class,'simpanverifikator']);
Route::get('/operator/verifikator/edit/{id}',[DataVerifikatorController::class,'editverifikator']);
Route::post('/operator/verifikator/edit/editsimpan',[DataVerifikatorController::class,'editsimpanverifikator']);
Route::get('/operator/verifikator/hapus/{id}',[DataVerifikatorController::class,'hapususer']);

// Route::get('/operator/siswa', [OperatorController::class, 'siswa']);
// Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahSiswa']);
// Route::post('/operator/siswa/simpan',[OperatorController::class,'simpanSiswa']);
// Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editSiswa']);
// Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpanSiswa']);
// Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapusSiswa']);


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
