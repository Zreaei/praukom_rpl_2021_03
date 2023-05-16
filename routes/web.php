<?php

use App\Http\Controllers\{
    Admin\AdminMainController,
    Admin\AdminLevelController,
    Admin\AdminUserController,
    Admin\AdminOperatorController,
    Admin\AdminSiswaController,
    Admin\AdminWalasController,
    Admin\AdminKaprogController,
    Admin\AdminAdmkeuController,
    Admin\AdminWkhubinController,
    Admin\AdminPbsekolahController,
    Admin\AdminPbidukaController,
    Admin\AdminVerifikatorController,
    Admin\AdminKelasController,
    Admin\AdminJurusanController,
    Admin\AdminAngkatanController,
    Admin\AdminLogController,
    Siswa\SiswaController,
    Siswa\PengajuanController,
    Siswa\HomeSiswaController,
    Siswa\PresensiController,
    Siswa\PrakerinController,
    Siswa\KegiatanController,
    Siswa\VerifikasiController,
    Operator\OperatorController,
    AdmKeu\HomeAdmkeuController,
    AdmKeu\DataPengajuanAdmkeuController,
    Kaprog\KaprogController,
    Operator\DataAdmkeuController,
    Operator\DataWkhubinController,
    Operator\DataKaprogController,
    Operator\DataWalasController,
    Operator\DataPbsekolahController,
    Operator\DataPbidukaController,
    Operator\DataVerifikatorController,
    PbIduka\PbidukaController,
    PbIduka\NilaipklController,
    PbIduka\DataPrakerinPbidukaController,
    PbSekolah\PbsekolahMainController,
    Verifikator\VerifikatorController,
    Walas\WalasMainController,
    Walas\WalasPengajuanController,
    WkHubin\WkhubinController,
    WkHubin\DataPengajuanController,
    Login\LoginController,
    Verifikator\VerifikatorMainController,
    Verifikator\VerifikatorVerifikasiController,
    Verifikator\VerifikatorPenilaianController,
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
});

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

    // Admin - Home
    Route::get('/admin', [AdminMainController::class, 'index'])->name('admin.home');

    // Admin - Data Level
    Route::get('/admin/data-level', [AdminLevelController::class, 'level']);

    // Admin - Log User
    Route::get('/admin/data-log', [AdminLogController::class, 'log']);

    // Admin - Kelola User
    Route::controller(AdminUserController::class)->group(function() {
        Route::get('/admin/data-user','user');
        Route::post('/admin/data-user/simpan','simpan');
        Route::get('/admin/data-user/hapus/{id}','hapus');
        Route::post('/admin/data-user/simpanedit','simpanedit');
    });


    // Admin - Kelola Operator
    Route::controller(AdminOperatorController::class)->group(function() {
        Route::get('/admin/data-op','operator');
        Route::get('/admin/data-op/tambah','tambahOpr');
        Route::post('/admin/data-op/simpan','simpan');
        Route::get('/admin/data-op/hapus/{id}','hapus');
        Route::get('/admin/data-op/edit/{id}','edit');
        Route::post('/admin/data-op/edit/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Angkatan
    Route::controller(AdminAngkatanController::class)->group(function() {
        Route::get('/admin/data-angkatan','angkatan');
        Route::post('/admin/data-angkatan/simpan','simpan');
        Route::get('/admin/data-angkatan/hapus/{id}','hapus');
        Route::post('/admin/data-angkatan/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Jurusan
    Route::controller(AdminJurusanController::class)->group(function() {
        Route::get('/admin/data-jurusan','jurusan');
        Route::post('/admin/data-jurusan/simpan','simpan');
        Route::get('/admin/data-jurusan/hapus/{id}','hapus');
        Route::post('/admin/data-jurusan/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Kelas
    Route::controller(AdminKelasController::class)->group(function() {
        Route::get('/admin/data-kelas','kelas');
        Route::post('/admin/data-kelas/simpan','simpan');
        Route::get('/admin/data-kelas/hapus/{id}','hapus');
        Route::post('/admin/data-kelas/simpanedit', 'simpanedit');
    }); 

    // Admin - Kelola Siswa
    Route::controller(AdminSiswaController::class)->group(function() {
        Route::get('/admin/data-siswa','siswa');
        Route::get('/admin/data-siswa/tambah','tambahSiswa');
        Route::post('/admin/data-siswa/simpan','simpan');
        Route::get('/admin/data-siswa/hapus/{id}','hapus');
        Route::get('/admin/data-siswa/edit/{id}','edit');
        Route::post('/admin/data-siswa/simpanedit','simpanedit');
    }); 

    // Admin - Kelola Admkeu
    Route::controller(AdminAdmkeuController::class)->group(function() {
        Route::get('/admin/data-admkeu','admkeu');
        Route::get('/admin/data-admkeu/tambah','tambahAdmkeu');
        Route::get('/admin/data-admkeu/simpan','simpan');
        Route::get('/admin/data-admkeu/hapus/{id}','hapus');
        Route::get('/admin/data-admkeu/edit/{id}','edit');
        Route::get('/admin/data-admkeu/edit/simpanedit','simpanedit');
    });

    // Admin - Kelola Walas
    Route::controller(AdminWalasController::class)->group(function() {
        Route::get('/admin/data-walas','walas');
        Route::post('/admin/data-walas/simpan','simpan');
        Route::get('/admin/data-walas/hapus/{id}','hapus');
        Route::post('/admin/data-walas/simpanedit','simpanedit');
    });

    // Admin - Kelola Kaprog
    Route::controller(AdminKaprogController::class)->group(function() {
        Route::get('/admin/data-kaprog','kaprog');
        Route::post('/admin/data-kaprog/simpan','simpan');
        Route::get('/admin/data-kaprog/hapus/{id}','hapus');
        Route::post('/admin/data-kaprog/simpanedit','simpanedit');
    });

    // Admin - Kelola WkHubin
    Route::controller(AdminWkhubinController::class)->group(function() {
        Route::get('/admin/data-wkhubin','wkhubin');
        Route::post('/admin/data-wkhubin/simpan','simpan');
        Route::get('/admin/data-wkhubin/hapus/{id}','hapus');
        Route::post('/admin/data-wkhubin/simpanedit','simpanedit');
    });

    // Admin - Kelola Pembimbing Sekolah
    Route::controller(AdminPbsekolahController::class)->group(function() {
        Route::get('/admin/data-pbsekolah','pbsekolah');
        Route::post('/admin/data-pbsekolah/simpan','simpan');
        Route::get('/admin/data-pbsekolah/hapus/{id}','hapus');
        Route::post('/admin/data-pbsekolah/simpanedit','simpanedit');
    });

    // Admin - Kelola Pembimbing IDUKA
    Route::controller(AdminPbidukaController::class)->group(function() {
        Route::get('/admin/data-pbiduka','pbiduka');
        Route::post('/admin/data-pbiduka/simpan','simpan');
        Route::get('/admin/data-pbiduka/hapus/{id}','hapus');
        Route::post('/admin/data-pbiduka/simpanedit','simpanedit');
    });

    // Admin - Kelola Verifikator
    Route::controller(AdminVerifikatorController::class)->group(function() {
        Route::get('/admin/data-verifikator','verifikator');
        Route::post('/admin/data-verifikator/simpan','simpan');
        Route::get('/admin/data-verifikator/hapus/{id}','hapus');
        Route::post('/admin/data-verifikator/simpanedit','simpanedit');
    });
});

// Operator
Route::group(['middleware' => ['auth', 'level:LVL002']], function () {

    // Operator - Dashboard
    Route::get('/operator/home', [OperatorMainController::class, 'home'])->name('operator.home');
    Route::get('/operator/profile', [OperatorMainController::class, 'profile'])->name('operator.profile');
    Route::get('/operator/monitoring', [OperatorMainController::class, 'monitoring'])->name('operator.monitoring');
    Route::get('/operator/pengajuan', [OperatorMainController::class, 'pengajuan'])->name('operator.pengajuan');
    Route::get('/operator/pengguna', [OperatorMainController::class, 'pengguna'])->name('operator.pengguna');
    Route::get('/operator/riwayat', [OperatorMainController::class, 'riwayat'])->name('operator.riwayat');

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
});

// Siswa
Route::group(['middleware' => ['auth', 'level:LVL003']], function () {

    // Siswa - home
    Route::get('/siswa/home', [SiswaController::class, 'home'])->name('siswa.home');
    Route::get('/siswa/profile', [SiswaController::class, 'profile'])->name('siswa.profile');

    // Siswa - pengajuan
    Route::get('/siswa/pengajuan', [PengajuanController::class, 'pengajuan'])->name('siswa.pengajuan');
    Route::post('/siswa/simpanpengajuan', [PengajuanController::class, 'tambahpengajuan'])->name('siswa.simpanpengajuan');
    Route::put('/siswa/editsimpanpengajuan', [PengajuanController::class, 'editpengajuan'])->name('siswa.editsimpanpengajuan');
    Route::get('/siswa/hapuspengajuan/{id}', [PengajuanController::class, 'hapus']);

    // Siswa - presensi
    Route::get('/siswa/presensi', [PresensiController::class, 'presensi'])->name('siswa.presensi');
    Route::post('/siswa/simpanpresensi', [PresensiController::class, 'tambahpresensi'])->name('siswa.simpanpresensi');
    Route::post('/siswa/editsimpanpresensi', [PresensiController::class, 'editpresensi'])->name('siswa.editsimpanpresensi');
    Route::get('/siswa/hapuspresensi/{id}', [PresensiController::class, 'hapus']);

    // Siswa - kegiatan
    Route::get('/siswa/kegiatan', [KegiatanController::class, 'kegiatan'])->name('siswa.kegiatan');
    Route::post('/siswa/simpankegiatan', [KegiatanController::class, 'tambahkegiatan'])->name('siswa.simpankegiatan');
    Route::get('/siswa/editkegiatan/{kegiatan}', [KegiatanController::class, 'editkegiatan'])->name('siswa.editkegiatan');
    Route::put('/siswa/editsimpankegiatan', [KegiatanController::class, 'editsimpankegiatan'])->name('siswa.editsimpankegiatan');
    Route::get('/siswa/hapuskegiatan/{id}', [KegiatanController::class, 'hapus']);

    // Siswa - verifikasi
    Route::get('/siswa/verifikasi', [VerifikasiController::class, 'verifikasi'])->name('siswa.verifikasi');
    Route::post('/siswa/simpanverifikasi', [VerifikasiController::class, 'tambahverifikasi'])->name('siswa.simpanverifikasi');
    Route::get('/siswa/editverifikasi/{verifikasi}', [VerifikasiController::class, 'editverifikasi'])->name('siswa.editverifikasi');
    Route::put('/siswa/editsimpanverifikasi', [VerifikasiController::class, 'editsimpanverifikasi'])->name('siswa.editsimpanverifikasi');
    Route::get('/siswa/hapusverifikasi/{id}', [VerifikasiController::class, 'hapus']);

    // Siswa - prakerin
    Route::get('/siswa/prakerin', [PrakerinController::class, 'prakerin'])->name('siswa.prakerin');
    Route::post('/siswa/tambahprakerin', [PrakerinController::class, 'tambahprakerin'])->name('siswa.tambahprakerin');
    Route::post('/siswa/editprakerin', [PrakerinController::class, 'editprakerin'])->name('siswa.editprakerin');
    Route::get('/siswa/hapusprakerin/{id}', [PrakerinController::class, 'hapus']);
});

// Pbsekolah
Route::group(['middleware' => ['auth', 'level:LVL004']], function () {
    Route::get('/pbsekolah/home', [PbsekolahMainController::class, 'home'])->name('pbsekolah.home');
    Route::get('/pbsekolah/profile', [PbsekolahMainController::class, 'profile'])->name('pbsekolah.profile');
    Route::get('/pbsekolah/prakerin', [PbsekolahMainController::class, 'prakerin'])->name('pbsekolah.prakerin');
    Route::get('/pbsekolah/presensi/{prakerin}', [PbsekolahMainController::class, 'presensi'])->name('pbsekolah.presensi');
    Route::get('/pbsekolah/terima/{id}', [PbsekolahMainController::class, 'terima'])->name('pbsekolah.terima');
    Route::get('/pbsekolah/tolak/{id}', [PbsekolahMainController::class, 'tolak'])->name('pbsekolah.tolak');
    Route::get('/pbsekolah/kegiatan/{prakerin}', [PbsekolahMainController::class, 'kegiatan'])->name('pbsekolah.kegiatan');
    Route::get('/pbsekolah/monitoring/{prakerin}', [PbsekolahMainController::class, 'monitoring'])->name('pbsekolah.monitoring');
    Route::post('/pbsekolah/simpanmonitoring', [PbsekolahMainController::class, 'simpanmonitoring'])->name('pbsekolah.simpanmonitoring');
    Route::get('/pbsekolah/hapusmonitoring/{id}', [PbsekolahMainController::class, 'hapusmonitoring']);
});

// Pbiduka
Route::group(['middleware' => ['auth', 'level:LVL005']], function () {
    Route::get('/pbiduka/prakerin', [DataPrakerinPbidukaController::class, 'dataprakerin'])->name('pbiduka.prakerin');
    Route::get('/pbiduka/presensi', [DataPrakerinPbidukaController::class, 'datapresensi'])->name('pbiduka.presensi');
    Route::get('/pbiduka/kegiatan', [DataPrakerinPbidukaController::class, 'datakegiatan'])->name('pbiduka.kegiatan');
    Route::get('/pbiduka/setuju/{id}', [DataPrakerinPbidukaController::class, 'statuskonfirmasi'])->name('pbiduka.terimakonfirmasi');
    Route::get('/pbiduka/tolak/{id}', [DataPrakerinPbidukaController::class, 'statustolak'])->name('pbiduka.tolakkonfirmasi');
    Route::get('/pbiduka/lulus/{id}', [DataPrakerinPbidukaController::class, 'statuslulus'])->name('pbiduka.sudahlulus');
    Route::get('/pbiduka/tidaklulus/{id}', [DataPrakerinPbidukaController::class, 'statustidak'])->name('pbiduka.tidaklulus');
    Route::get('/pbiduka/penilaian', [NilaipklController::class, 'nilaipkl'])->name('pbiduka.penilaian');
    Route::get('/pbiduka/profile', [PbidukaController::class, 'profile'])->name('pbiduka.profile');
    Route::get('/pbiduka/home', [PbidukaController::class, 'home'])->name('pbiduka.home');
});

// Walas
Route::group(['middleware' => ['auth', 'level:LVL006']], function () {

    // Walas
    Route::get('/walas/home', [WalasMainController::class, 'home'])->name('walas.home');

    // Walas - Data Pengajuan
    Route::controller(WalasPengajuanController::class)->group(function() {
        Route::get('/walas/pengajuan','pengajuan');
        Route::get('/walas/setuju/{id}','statuskonfirmasi')->name('walas.terima');
        Route::get('/walas/tolak/{id}','statustolak')->name('walas.tolak');
    });
});

// Admkeu
Route::group(['middleware' => ['auth', 'level:LVL007']], function () {
    Route::get('/admkeu/pengajuan', [DataPengajuanAdmkeuController::class, 'datapengajuan'])->name('admkeu.pengajuan');
    Route::get('/admkeu/setuju/{id}', [DataPengajuanAdmkeuController::class, 'statuskonfirmasi'])->name('admkeu.terima');
    Route::get('/admkeu/tolak/{id}', [DataPengajuanAdmkeuController::class, 'statustolak'])->name('admkeu.tolak');
    Route::get('/admkeu/home', [HomeAdmkeuController::class, 'home'])->name('admkeu.home');
});

// Wkhubin
Route::group(['middleware' => ['auth', 'level:LVL008']], function () {
    Route::get('/wkhubin/home', [WkhubinMainController::class, 'home'])->name('wkhubin.home');
    Route::get('/wkhubin/profile', [WkhubinMainController::class, 'profile'])->name('wkhubin.profile');
    Route::get('/wkhubin/pengajuan', [WkhubinMainController::class, 'pengajuan'])->name('wkhubin.pengajuan');
    Route::get('/wkhubin/terima/{id}', [WkhubinMainController::class, 'terima'])->name('wkhubin.terima');
    Route::get('/wkhubin/tolak/{id}', [WkhubinMainController::class, 'tolak'])->name('wkhubin.tolak');
});

 // Kaprog
Route::group(['middleware' => ['auth', 'level:LVL009']], function () {
    Route::get('/kaprog/home', [KaprogMainController::class, 'home'])->name('kaprog.home');
    Route::get('/kaprog/profile', [KaprogMainController::class, 'profile'])->name('kaprog.profile');
    Route::get('/kaprog/pengajuan', [KaprogMainController::class, 'pengajuan'])->name('kaprog.pengajuan');
    Route::get('/kaprog/terima/{id}', [KaprogMainController::class, 'terima'])->name('kaprog.terima');
    Route::get('/kaprog/tolak/{id}', [KaprogMainController::class, 'tolak'])->name('kaprog.tolak');
});

// Verifikator
Route::group(['middleware' => ['auth', 'level:LVL010']], function () {
    // Verifikator - Home
    Route::get('/verifikator/home',[VerifikatorMainController::class, 'home'])->name('verifikator.home');

    // Verifikator - Verifikasi
    Route::controller(VerifikatorVerifikasiController::class)->group(function() {
        Route::get('/verifikator/verifikasi','verifikasi');
        Route::get('/verifikator/setuju/{id}','statuskonfirmasi')->name('verifikator.terima');
        Route::get('/verifikator/tolak/{id}','statustolak')->name('verifikator.tolak');
    });

    Route::controller(VerifikatorPenilaianController::class)->group(function() {
        Route::get('/verifikator/penilaian','penilaian');
    });
});