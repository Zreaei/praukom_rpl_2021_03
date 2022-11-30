<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'nis';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nis','user','kelas','nama_siswa','tempat_lahir','tgl_lahir','telp_siswa'];

}