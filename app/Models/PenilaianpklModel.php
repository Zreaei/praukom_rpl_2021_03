<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianpklModel extends Model
{
    use HasFactory;
    protected $table = 'penilaian_pkl';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_nilaipkl';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaipkl','siswa','pb_iduka'];
}
