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

// Operator
Route::get('/operator/home', [OperatorController::class, 'home']);

// Siswa
Route::get('/siswa/home', [SiswaController::class, 'home']);

// Pbsekolah
Route::get('/pbsekolah/home', [PbsekolahController::class, 'home']);

// Pbiduka
Route::get('/pbiduka/home', [PbidukaController::class, 'home']);

// Walas
Route::get('/walas/home', [WalasController::class, 'home']);

// Admkeu
Route::get('/admkeu/home', [AdmkeuController::class, 'home']);

// Wkhubin
Route::get('/wkhubin/home', [WkhubinController::class, 'home']);

// Kaprog
Route::get('/kaprog/home', [KaprogController::class, 'home']);

// Verifikator
Route::get('/verifikator/home', [VerifikatorController::class, 'home']);

// Login
Route::get('/login', [VerifikatorController::class, 'login']);

// Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
