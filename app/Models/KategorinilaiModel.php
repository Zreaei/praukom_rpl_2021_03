<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategorinilaiModel extends Model
{
    use HasFactory;
    protected $table = 'kategori_nilai';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_kat_nilai';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_kat_nilai','jurusan','nama_nilai','nama_kategori'];

}