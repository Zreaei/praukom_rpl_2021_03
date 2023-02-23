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
    Operator\OperatorMainController,
    Operator\OperatorDataAdmkeuController,
    Operator\OperatorDataPbsekolahController,
    Operator\OperatorDataPbidukaController,
    Operator\OperatorDataVerifikatorController,
    Operator\OperatorDataSiswaController,
    Siswa\SiswaController,
    Siswa\PengajuanController,
    Siswa\PresensiController,
    AdmKeu\AdmkeuController,
    Kaprog\KaprogMainController,
    PbIduka\PbidukaController,
    PbSekolah\PbsekolahMainController,
    Verifikator\VerifikatorController,
    Walas\WalasController,
    WkHubin\WkhubinMainController,
    Login\LoginController,
};
use App\Http\Controllers\Admin\DataLevelController;
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

// Login - Register Siswa(Operator Only)
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login.action');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('home');

// Admin - Data Level
Route::get('/admin/data-level', [DataLevelController::class, 'level']);

// Admin - Kelola User
Route::get('/admin/data-user', [UserController::class, 'user']);
Route::post('/admin/data-user/simpan', [UserController::class, 'simpan']);
Route::get('/admin/data-user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/admin/data-user/edit/{id}', [UserController::class, 'edit']);
Route::post('/admin/data-user/edit/simpanedit', [UserController::class, 'simpanedit']);

// Admin - Kelola Operator
Route::get('/admin/data-op', [DataOperatorController::class, 'operator']);
Route::get('/admin/data-op/tambah', [DataOperatorController::class, 'tambahOpr']);
Route::post('/admin/data-op/simpan', [DataOperatorController::class, 'simpan']);
Route::get('/admin/data-op/hapus/{id}', [DataOperatorController::class, 'hapus']);
Route::get('/admin/data-op/edit/{id}', [DataOperatorController::class, 'edit']);
Route::post('/admin/data-op/edit/simpanedit', [DataOperatorController::class, 'simpanedit']);

// Admin - Kelola Angkatan
Route::get('/admin/data-angkatan', [DataAngkatanController::class, 'angkatan']);
Route::get('/admin/data-angkatan/tambah', [DataAngkatanController::class, 'tambahAngkatan']);
Route::post('/admin/data-angkatan/simpan', [DataAngkatanController::class, 'simpan']);
Route::get('/admin/data-angkatan/hapus/{id}', [DataAngkatanController::class, 'hapus']);
Route::get('/admin/data-angkatan/edit/{id}', [DataAngkatanController::class, 'edit']);
Route::post('/admin/data-angkatan/edit/simpanedit', [DataAngkatanController::class, 'simpanedit']);

// Admin - Kelola Jurusan
Route::get('/admin/data-jurusan', [DataJurusanController::class, 'jurusan']);
Route::get('/admin/data-jurusan/tambah', [DataJurusanController::class, 'tambahJurusan']);
Route::post('/admin/data-jurusan/simpan', [DataJurusanController::class, 'simpan']);
Route::get('/admin/data-jurusan/hapus/{id}', [DataJurusanController::class, 'hapus']);
Route::get('/admin/data-jurusan/edit/{id}', [DataJurusanController::class, 'edit']);
Route::post('/admin/data-jurusan/edit/simpanedit', [DataJurusanController::class, 'simpanedit']);

// Admin - Kelola Kelas
Route::get('/admin/data-kelas', [DataKelasController::class, 'kelas']);
Route::get('/admin/data-kelas/tambah', [DataKelasController::class, 'tambahKelas']);
Route::post('/admin/data-kelas/simpan', [DataKelasController::class, 'simpan']);
Route::get('/admin/data-kelas/hapus/{id}', [DataKelasController::class, 'hapus']);
Route::get('/admin/data-kelas/edit/{id}', [DataKelasController::class, 'edit']);
Route::post('/admin/data-kelas/edit/simpanedit',[DataKelasController::class,'simpanedit']);

// Admin - Kelola Siswa
Route::get('/admin/data-siswa', [DataSiswaController::class, 'siswa']);
Route::get('/admin/data-siswa/tambah', [DataSiswaController::class, 'tambahSiswa']);
Route::post('/admin/data-siswa/simpan', [DataSiswaController::class, 'simpan']);
Route::get('/admin/data-siswa/hapus/{id}', [DataSiswaController::class, 'hapus']);
Route::get('/admin/data-siswa/edit/{id}', [DataSiswaController::class, 'edit']);
Route::post('/admin/data-siswa/edit/simpanedit',[DataSiswaController::class,'simpanedit']);

// Admin - Kelola Admku
Route::get('/admin/data-admku', [DataAdmkuController::class, 'admku']);

// Operator - Dashboard
Route::get('/operator/home', [OperatorMainController::class, 'home'])->name('operator.home');
Route::get('/operator/profile', [OperatorMainController::class, 'profile'])->name('operator.profile');
Route::get('/operator/monitoring', [OperatorMainController::class, 'monitoring'])->name('operator.monitoring');
Route::get('/operator/pengajuan', [OperatorMainController::class, 'pengajuan'])->name('operator.pengajuan');
Route::get('/operator/pengguna', [OperatorMainController::class, 'pengguna'])->name('operator.pengguna');
Route::get('/operator/riwayat', [OperatorMainController::class, 'riwayat'])->name('operator.riwayat');

// Route::get('/operator/terima/{id}', [OperatorMainController::class, 'terima'])->name('operator.terima');
// Route::get('/operator/tolak/{id}', [OperatorMainController::class, 'tolak'])->name('operator.tolak');

// Operator - Kelola Pbsekolah
Route::get('/operator/pbsekolah', [OperatorDataPbsekolahController::class, 'pbsekolah','tambahpbsekolah'])->name('operator.pbsekolah');
Route::post('/operator/simpanpbsekolah', [OperatorDataPbsekolahController::class, 'tambahpbsekolah'])->name('operator.simpanpbsekolah');
Route::get('/operator/editpbsekolah/{pbsekolah}', [OperatorDataPbsekolahController::class, 'editpbsekolah']);
Route::put('/operator/editsimpanpbsekolah', [OperatorDataPbsekolahController::class, 'editsimpanpbsekolah']);
Route::get('/operator/hapuspbsekolah/{id}', [OperatorDataPbsekolahController::class, 'hapuspbsekolah']);

// Operator - Kelola pbiduka
Route::get('/operator/pbiduka', [OperatorDataPbidukaController::class, 'pbiduka','tambahpbiduka'])->name('operator.pbiduka');
Route::post('/operator/simpanpbiduka', [OperatorDataPbidukaController::class, 'tambahpbiduka'])->name('operator.simpanpbiduka');
Route::get('/operator/editpbiduka/{pbiduka}', [OperatorDataPbidukaController::class, 'editpbiduka']);
Route::put('/operator/editsimpanpbiduka', [OperatorDataPbidukaController::class, 'editsimpanpbiduka']);
Route::get('/operator/hapuspbiduka/{id}', [OperatorDataPbidukaController::class, 'hapuspbiduka']);

// Operator - Kelola siswa
Route::get('/operator/siswa', [OperatorDataSiswaController::class, 'siswa','tambahsiswa'])->name('operator.siswa');
Route::post('/operator/simpansiswa', [OperatorDataSiswaController::class, 'tambahsiswa'])->name('operator.simpansiswa');
Route::get('/operator/editsiswa/{siswa}', [OperatorDataSiswaController::class, 'editsiswa']);
Route::put('/operator/editsimpansiswa', [OperatorDataSiswaController::class, 'editsimpansiswa']);
Route::get('/operator/hapussiswa/{id}', [OperatorDataSiswaController::class, 'hapussiswa']);
Route::get('/operator/cetaksiswa/{siswa}', [OperatorDataSiswaController::class, 'cetaksiswa']);
Route::get('/operator/nilaiverif/{siswa}', [OperatorDataSiswaController::class, 'nilaiverif']);
Route::get('/operator/nilaipkl/{siswa}', [OperatorDataSiswaController::class, 'nilaipkl']);

// Operator - Kelola verifikator
Route::get('/operator/verifikator', [OperatorDataVerifikatorController::class, 'verifikator','tambahverifikator'])->name('operator.verifikator');
Route::post('/operator/simpanverifikator', [OperatorDataVerifikatorController::class, 'tambahverifikator'])->name('operator.simpanverifikator');
Route::get('/operator/editverifikator/{verifikator}', [OperatorDataVerifikatorController::class, 'editverifikator']);
Route::put('/operator/editsimpanverifikator', [OperatorDataVerifikatorController::class, 'editsimpanverifikator']);
Route::get('/operator/hapusverifikator/{id}', [OperatorDataVerifikatorController::class, 'hapusverifikator']);

// Operator - Kelola ADM Keuangan
Route::get('/operator/admkeu', [OperatorDataAdmkeuController::class, 'admkeu']);
Route::get('/operator/admkeu/tambah', [OperatorDataAdmkeuController::class, 'tambahadmkeu']);
Route::post('/operator/admkeu/tambah/tambahsimpan', [OperatorDataAdmkeuController::class, 'simpanadmkeu']);
Route::get('/operator/admkeu/edit/{admkeu}', [OperatorDataAdmkeuController::class, 'editadmkeu']);
Route::put('/operator/admkeu/edit/editsimpan', [OperatorDataAdmkeuController::class, 'editsimpanadmkeu']);
Route::get('/operator/admkeu/detail/{admkeu}', [OperatorDataAdmkeuController::class, 'detailadmkeu']);
Route::get('/operator/admkeu/hapus/{id}', [OperatorDataAdmkeuController::class, 'hapusadmkeu']);

// Siswa - home
Route::get('/siswa/home', [SiswaController::class, 'home'])->name('siswa.home');
Route::get('/siswa/profil', [SiswaController::class, 'profil']);

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

// Wkhubin - Dashboard
Route::get('/wkhubin/home', [WkhubinMainController::class, 'home'])->name('wkhubin.home');
Route::get('/wkhubin/profile', [WkhubinMainController::class, 'profile'])->name('wkhubin.profile');
Route::get('/wkhubin/pengajuan', [WkhubinMainController::class, 'pengajuan'])->name('wkhubin.pengajuan');
Route::get('/wkhubin/terima/{id}', [WkhubinMainController::class, 'terima'])->name('wkhubin.terima');
Route::get('/wkhubin/tolak/{id}', [WkhubinMainController::class, 'tolak'])->name('wkhubin.tolak');

// Kaprog - Dashboard
Route::get('/kaprog/home', [KaprogMainController::class, 'home'])->name('kaprog.home');
Route::get('/kaprog/profile', [KaprogMainController::class, 'profile'])->name('kaprog.profile');
Route::get('/kaprog/pengajuan', [KaprogMainController::class, 'pengajuan'])->name('kaprog.pengajuan');
Route::get('/kaprog/terima/{id}', [KaprogMainController::class, 'terima'])->name('kaprog.terima');
Route::get('/kaprog/tolak/{id}', [KaprogMainController::class, 'tolak'])->name('kaprog.tolak');

// Pbsekolah - Dashboard
Route::get('/pbsekolah/home', [PbsekolahMainController::class, 'home'])->name('pbsekolah.home');
Route::get('/pbsekolah/profile', [PbsekolahMainController::class, 'profile'])->name('pbsekolah.profile');
Route::get('/pbsekolah/prakerin', [PbsekolahMainController::class, 'prakerin'])->name('pbsekolah.prakerin');
Route::get('/pbsekolah/presensi/{prakerin}', [PbsekolahMainController::class, 'presensi'])->name('pbsekolah.presensi');
Route::get('/pbsekolah/terima/{id}', [PbsekolahMainController::class, 'terima'])->name('pbsekolah.terima');
Route::get('/pbsekolah/tolak/{id}', [PbsekolahMainController::class, 'tolak'])->name('pbsekolah.tolak');
Route::get('/pbsekolah/kegiatan/{prakerin}', [PbsekolahMainController::class, 'kegiatan'])->name('pbsekolah.kegiatan');
Route::post('/pbsekolah/simpanmonitoring', [PbsekolahMainController::class, 'tambahmonitoring'])->name('pbsekolah.simpanmonitoring');
Route::get('/pbsekolah/hapusmonitoring/{id}', [PbsekolahMainController::class, 'hapusmonitoring']);