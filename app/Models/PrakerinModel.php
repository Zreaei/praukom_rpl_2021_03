<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrakerinModel extends Model
{
    use HasFactory;
    protected $table = 'prakerin';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_prakerin';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_prakerin','pengajuan','siswa','iduka','status_prakerin','tgl_mulai','tgl_selesai'];
}
