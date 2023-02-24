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
<<<<<<< HEAD
    protected $fillable = ['id_prakerin','pengajuan','siswa','iduka','status_prakerin','tgl_mulai','tgl_selesai'];
=======
    protected $fillable = ['id_prakerin','pengajuan','siswa','iduka','monitoring','status_prakerin','tgl_mulai','tgl_selesai'];
>>>>>>> e01679e195840334664fe728166a85886559141a
}
