<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiModel extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $softDelete = false;
    public $timestamps = false;
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_presensi','tgl_presensi','keterangan_presensi','foto_kegiatan','keterangan_kegiatan','jam_masuk','jam_keluar','status_presensi','konfirmasi_pbsekolah','konfirmasi_pbiduka'];
}
