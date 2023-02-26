<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaipklModel extends Model
{
    use HasFactory;
    protected $table = 'nilai_pkl';
    protected $softDelete = false;
    public $timestamps = false;
<<<<<<< HEAD
    protected $primaryKey = 'id_nilaipkl';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaipkl','kategori_nilai','nilai_pkl'];

}
=======
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaipkl','kategori_nilai','prakerin','pb_iduka','jml_nilaipkl','predikat_nilaipkl'];
}
>>>>>>> e01679e195840334664fe728166a85886559141a
