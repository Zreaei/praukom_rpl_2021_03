<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_kelas','walas','angkatan','jurusan','tingkatan','nama_kelas'];
}
