<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PbidukaModel extends Model
{
    use HasFactory;
    protected $table = 'pb_iduka';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'nik';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nik','user','nama_pbiduka','telp_pbiduka'];
}