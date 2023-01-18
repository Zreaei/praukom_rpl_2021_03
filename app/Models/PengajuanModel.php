<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanModel extends Model
{
    use HasFactory;
    protected $table = 'surat_pengajuan';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_surat';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_surat','tanggal_pengajuan','nama_perusahaan','alamat_perusahaan','pimpinan_perusahaan','telp_perusahaan'];
}
