<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiModel extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_presensi';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_presensi','prakerin','pb_iduka','pb_sekolah','tgl_presensi','keterangan_presensi','status_presensi','konfirmasi_pbsekolah','konfirmasi_pbiduka'];
}
