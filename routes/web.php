<?php

use App\Http\Controllers\{
    Admin\AdminController,
    Admin\UserController,
    Admin\DataOperatorController,
    Admin\DataJurusanController,
    Admin\DataKelasController,
    Admin\DataAngkatanController,
    Admin\DataSiswaController,
    Admin\DataAdmkuController,
    Siswa\SiswaController,
    Siswa\PengajuanController,
    Siswa\PresensiController,
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
    WkHubin\DataPengajuanController,
    HomeController,
    Login\LoginController,
};
use App\Http\Controllers\Admin\DataLevelController;
use App\Http\Middleware\CekUser;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome.welcome');
})->name('home');

// Login - Register
Route::controller(LoginController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register_action')->name('register.action');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_action')->name('login.action');
});

// Logout
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');

// Admin
Route::group(['middleware' => ['auth', 'level:LVL001']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('home');
    // Admin - Data Level
    Route::get('/admin/data-level', [DataLevelController::class, 'level']);

    // Admin - Kelola User
    Route::controller(UserController::class)->group(function() {
        Route::get('/admin/data-user','user');
        Route::post('/admin/data-user/simpan','simpan');
        Route::get('/admin/data-user/hapus/{id}','hapus');
        Route::post('/admin/data-user/simpanedit','simpanedit');
    });

    // Admin - Kelola Operator
    Route::controller(DataOperatorController::class)->group(function() {
        Route::get('/admin/data-op','operator');
        Route::get('/admin/data-op/tambah','tambahOpr');
        Route::post('/admin/data-op/simpan','simpan');
        Route::get('/admin/data-op/hapus/{id}','hapus');
        Route::get('/admin/data-op/edit/{id}','edit');
        Route::post('/admin/data-op/edit/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Angkatan
    Route::controller(DataAngkatanController::class)->group(function() {
        Route::get('/admin/data-angkatan','angkatan');
        Route::post('/admin/data-angkatan/simpan','simpan');
        Route::get('/admin/data-angkatan/hapus/{id}','hapus');
        Route::post('/admin/data-angkatan/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Jurusan
    Route::controller(DataJurusanController::class)->group(function() {
        Route::get('/admin/data-jurusan','jurusan');
        Route::post('/admin/data-jurusan/simpan','simpan');
        Route::get('/admin/data-jurusan/hapus/{id}','hapus');
        Route::post('/admin/data-jurusan/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Kelas
    Route::controller(DataKelasController::class)->group(function() {
        Route::get('/admin/data-kelas','kelas');
        Route::post('/admin/data-kelas/simpan','simpan');
        Route::get('/admin/data-kelas/hapus/{id}','hapus');
        Route::post('/admin/data-kelas/simpanedit', 'simpanedit');
    }); 

    // Admin - Kelola Siswa
    Route::controller(DataSiswaController::class)->group(function() {
        Route::get('/admin/data-siswa','siswa');
        Route::get('/admin/data-siswa/tambah','tambahSiswa');
        Route::post('/admin/data-siswa/simpan','simpan');
        Route::get('/admin/data-siswa/hapus/{id}','hapus');
        Route::get('/admin/data-siswa/edit/{id}','edit');
        Route::post('/admin/data-siswa/edit/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Admku
    Route::controller(DataAdmkuController::class)->group(function() {
        Route::get('/admin/data-admku','admku');
        Route::get('/admin/data-admku/tambah','tambahAdmku');
        Route::get('/admin/data-admku/simpan','simpan');
        Route::get('/admin/data-admku/hapus/{id}','hapus');
        Route::get('/admin/data-admku/edit/{id}','edit');
        Route::get('/admin/data-admku/edit/simpanedit','simpanedit');
    });
});

// Operator - Dashboard
Route::get('/operator/home', [OperatorController::class, 'home'])->name('operator.home');
Route::get('/operator/profile', [OperatorController::class, 'profile'])->name('operator.profile');
Route::get('/operator/monitoring', [OperatorController::class, 'monitoring'])->name('operator.monitoring');
Route::get('/operator/nilai', [OperatorController::class, 'nilai'])->name('operator.nilai');

// Operator - Kelola Wkhubin
Route::get('/operator/wkhubin', [DataWkhubinController::class, 'wkhubin']);
Route::get('/operator/wkhubin/tambah', [DataWkhubinController::class, 'tambahwkhubin']);
Route::post('/operator/wkhubin/tambah/tambahsimpan', [DataWkhubinController::class, 'simpanwkhubin']);
Route::get('/operator/wkhubin/edit/{id}', [DataWkhubinController::class, 'editwkhubin']);
Route::post('/operator/wkhubin/edit/editsimpan', [DataWkhubinController::class, 'editsimpanwkhubin']);
Route::get('/operator/wkhubin/hapus/{id}', [DataWkhubinController::class, 'hapususer']);

// Operator - Kelola Pbsekolah
Route::get('/operator/pbsekolah', [DataPbsekolahController::class, 'pbsekolah','tambahpbsekolah'])->name('operator.pbsekolah');
Route::post('/operator/simpanpbsekolah', [DataPbsekolahController::class, 'tambahpbsekolah'])->name('operator.simpanpbsekolah');
Route::get('/operator/editpbsekolah/{pbsekolah}', [DataPbsekolahController::class, 'editpbsekolah']);
Route::put('/operator/editsimpanpbsekolah', [DataPbsekolahController::class, 'editsimpanpbsekolah']);
Route::get('/operator/hapuspbsekolah/{id}', [DataPbsekolahController::class, 'hapuspbsekolah']);

// Operator - Kelola Pbiduka
Route::get('/operator/pbiduka', [DataPbidukaController::class, 'pbiduka','tambahpbiduka'])->name('operator.pbiduka');
Route::post('/operator/simpanpbiduka', [DataPbidukaController::class, 'tambahpbiduka'])->name('operator.simpanpbiduka');
Route::put('/operator/editsimpanpbiduka', [DataPbidukaController::class, 'editpbiduka'])->name('operator.editsimpanpbiduka');
Route::get('/operator/hapuspbiduka/{id}', [DataPbidukaController::class, 'hapususer']);

// Operator - Kelola Siswa
Route::get('/operator/siswa', [DataSiswaController::class, 'siswa','tambahsiswa'])->name('operator.siswa');
Route::post('/operator/simpansiswa', [DataSiswaController::class, 'tambahsiswa'])->name('operator.simpansiswa');
Route::put('/operator/editsimpansiswa', [DataSiswaController::class, 'editsiswa'])->name('operator.editsimpansiswa');
Route::get('/operator/hapussiswa/{id}', [DataSiswaController::class, 'hapususer']);

// Operator - Kelola Kaprog
Route::get('/operator/kaprog', [DataKaprogController::class, 'kaprog']);
Route::get('/operator/kaprog/tambah', [DataKaprogController::class, 'tambahkaprog']);
Route::post('/operator/kaprog/tambah/tambahsimpan', [DataKaprogController::class, 'simpankaprog']);
Route::get('/operator/kaprog/edit/{id}', [DataKaprogController::class, 'editkaprog']);
Route::post('/operator/kaprog/edit/editsimpan', [DataKaprogController::class, 'editsimpankaprog']);
Route::get('/operator/kaprog/hapus/{id}', [DataKaprogController::class, 'hapususer']);

// Operator - Kelola Walas
Route::get('/operator/walas', [DataWalasController::class, 'walas']);
Route::get('/operator/walas/tambah', [DataWalasController::class, 'tambahwalas']);
Route::post('/operator/walas/tambah/tambahsimpan', [DataWalasController::class, 'simpanwalas']);
Route::get('/operator/walas/edit/{id}', [DataWalasController::class, 'editwalas']);
Route::post('/operator/walas/edit/editsimpan', [DataWalasController::class, 'editsimpanwalas']);
Route::get('/operator/walas/hapus/{id}', [DataWalasController::class, 'hapususer']);

// Operator - Kelola Verifikator
Route::get('/operator/verifikator', [DataVerifikatorController::class, 'verifikator']);
Route::get('/operator/verifikator/tambah', [DataVerifikatorController::class, 'tambahverifikator']);
Route::post('/operator/verifikator/tambah/tambahsimpan', [DataVerifikatorController::class, 'simpanverifikator']);
Route::get('/operator/verifikator/edit/{id}', [DataVerifikatorController::class, 'editverifikator']);
Route::post('/operator/verifikator/edit/editsimpan', [DataVerifikatorController::class, 'editsimpanverifikator']);
Route::get('/operator/verifikator/hapus/{id}', [DataVerifikatorController::class, 'hapususer']);

// Operator - Kelola ADM Keuangan
Route::get('/operator/admkeu', [DataAdmkeuController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah', [DataAdmkeuController::class, 'tambahadmkeu']);
Route::post('/operator/admkeu/tambah/tambahsimpan', [DataAdmkeuController::class, 'simpanadmkeu']);
Route::get('/operator/admkeu/edit/{admkeu}', [DataAdmkeuController::class, 'editadmkeu']);
Route::put('/operator/admkeu/edit/editsimpan', [DataAdmkeuController::class, 'editsimpanadmkeu']);
Route::get('/operator/admkeu/detail/{admkeu}', [DataAdmkeuController::class, 'detailadmkeu']);
Route::get('/operator/admkeu/hapus/{id}', [DataAdmkeuController::class, 'hapusadmkeu']);

// Route::get('/operator/siswa', [OperatorController::class, 'siswa']);
// Route::get('/operator/siswa/tambah',[OperatorController::class,'tambahSiswa']);
// Route::post('/operator/siswa/simpan',[OperatorController::class,'simpanSiswa']);
// Route::get('/operator/siswa/edit/{id}',[OperatorController::class,'editSiswa']);
// Route::post('/operator/siswa/edit/editsimpan',[OperatorController::class,'editsimpanSiswa']);
// Route::get('/operator/siswa/hapus/{id}',[OperatorController::class,'hapusSiswa']);

// Siswa - home
Route::group(['middleware' => ['auth', 'level:LVL003']], function () {
    Route::get('/siswa/home', [SiswaController::class, 'home'])->name('siswa.home');
    Route::get('/siswa/profil', [SiswaController::class, 'profil']);
});

// Siswa - pengajuan
Route::get('/siswa/pengajuan', [PengajuanController::class, 'pengajuan','tambahpengajuan'])->name('siswa.pengajuan');
Route::post('/siswa/simpanpengajuan', [PengajuanController::class, 'tambahpengajuan'])->name('siswa.simpanpengajuan');
// Route::get('/siswa/editpengajuan/{pengajuan}', [PengajuanController::class, 'editpengajuan'])->name('siswa.editpengajuan');
Route::put('/siswa/editsimpanpengajuan', [PengajuanController::class, 'editpengajuan'])->name('siswa.editsimpanpengajuan');
Route::get('/siswa/hapuspengajuan/{id}', [PengajuanController::class, 'hapus']);

// Siswa - presensi
Route::get('/siswa/presensi', [PresensiController::class, 'presensi'])->name('siswa.presensi');
Route::get('/siswa/tambahpresensi', [PresensiController::class, 'tambahpresensi'])->name('siswa.tambahpresensi');
Route::put('/siswa/simpanpresensi', [PresensiController::class, 'simpanpresensi'])->name('siswa.simpanpresensi');
Route::get('/siswa/editpresensi/{id}', [PresensiController::class, 'editpresensi']);
Route::put('/siswa/editsimpanpresensi/{id}', [presensiController::class, 'editsimpan']);
Route::get('/siswa/hapuspresensi/{id}', [PresensiController::class, 'hapus']);

// Siswa - prakerin
Route::get('/siswa/prakerin', [PrakerinController::class, 'prakerin'])->name('siswa.prakerin');
Route::get('/siswa/tambahprakerin', [PrakerinController::class, 'tambahprakerin'])->name('siswa.tambahprakerin');
Route::put('/siswa/simpanprakerin', [PrakerinController::class, 'simpanprakerin'])->name('siswa.simpanprakerin');
Route::get('/siswa/editprakerin/{id}', [PrakerinController::class, 'editprakerin'])->name('siswa.editprakerin');;
Route::put('/siswa/editsimpanprakerin/{id}', [prakerinController::class, 'editsimpan']);
Route::get('/siswa/hapusprakerin/{id}', [PrakerinController::class, 'hapus']);

// // Siswa
// Route::get('/siswa/home', [SiswaController::class, 'home']);
// Route::get('/siswa', [SiswaController::class, 'siswa']);
// Route::get('/siswa/tambah',[SiswaController::class,'formTambah']);
// Route::post('/siswa/simpan',[SiswaController::class,'simpan']);
// Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);
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

Route::get('/wkhubin/pengajuan', [DataPengajuanController::class, 'pengajuan']);
