<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianpklModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'penilaian_pkl';
=======
    protected $table = 'penilaian_pkl';  
>>>>>>> e01679e195840334664fe728166a85886559141a
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_nilaipkl';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaipkl','siswa','pb_iduka'];
<<<<<<< HEAD

}
=======
}
>>>>>>> e01679e195840334664fe728166a85886559141a
