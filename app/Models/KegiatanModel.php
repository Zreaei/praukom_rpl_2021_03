<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanModel extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_kegiatan';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_kegiatan','prakerin','foto_kegiatan','keterangan_kegiatan','tgl_kegiatan','jam_masuk','jam_keluar'];
}
