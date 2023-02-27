<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaModel extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $softDelete = false;
    public $timestamps = false;
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_kegiatan','tgl_kegiatan','foto_kegiatan','keterangan_kegiatan','jam_masuk','jam_keluar'];
}
