<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanModel extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_pengajuan';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_pengajuan', 'siswa', 'iduka', 'adm_keuangan', 'waka_hubin', 'kaprog', 'walas', 'tgl_pengajuan', 'konfirmasi_admkeu', 'konfirmasi_wkhubin', 'konfimasi_kaprog', 'konfirmasi_walas'];
}
