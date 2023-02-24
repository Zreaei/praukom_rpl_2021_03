<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> e01679e195840334664fe728166a85886559141a

class VerifikasiModel extends Model
{
    use HasFactory;
    protected $table = 'verifikasi';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_verifikasi';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_verifikasi','siswa','verifikator','tgl_verifikasi','bukti_verifikasi','konfirmasi_verifikator'];
<<<<<<< HEAD
}
=======
}
>>>>>>> e01679e195840334664fe728166a85886559141a
