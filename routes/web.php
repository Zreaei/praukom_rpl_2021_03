<?php

use App\Http\Controllers\AdminController;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
=======
use App\Http\Controllers\AdmkeuController;
use App\Http\Controllers\KaprogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PbidukaController;
use App\Http\Controllers\PbsekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\VerifikatorController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\WkhubinController;
>>>>>>> f78f40be80dd62250e4f1da0ef0ec3c5ae277252
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
<<<<<<< HEAD

// Route::get('/admin-home', [AdminController::class, 'index']);
Route::get('/admin-home/data-op', [AdminController::class, 'operator']);
Route::get('/admin-home/data-siswa', [AdminController::class, 'siswa']);
=======
// Admin - home
Route::get('/adminhome', [AdminController::class, 'home']);
>>>>>>> f78f40be80dd62250e4f1da0ef0ec3c5ae277252

// Operator - home
Route::get('/operator/home', [OperatorController::class, 'home']);

// Siswa - home
Route::get('/siswa/home', [SiswaController::class, 'home']);

// Pbsekolah - home
Route::get('/pbsekolah/home', [PbsekolahController::class, 'home']);

// Pbiduka - home
Route::get('/pbiduka/home', [PbidukaController::class, 'home']);

// Walas - home
Route::get('/walas/home', [WalasController::class, 'home']);

// Admkeu - home
Route::get('/admkeu/home', [AdmkeuController::class, 'home']);

// Wkhubin - home
Route::get('/wkhubin/home', [WkhubinController::class, 'home']);

// Kaprog - home
Route::get('/kaprog/home', [KaprogController::class, 'home']);

// Verifikator - home
Route::get('/verifikator/home', [VerifikatorController::class, 'home']);

// Login
Route::get('/login', [VerifikatorController::class, 'login']);

// Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
