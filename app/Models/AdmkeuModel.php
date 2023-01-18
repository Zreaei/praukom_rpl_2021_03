<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdmkeuModel extends Model
{
    use HasFactory;
    protected $table = 'adm_keuangan';
    // protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_admkeu';
    // public $incrementing = false;
    // public $keyType = 'string';
    protected $fillable = ['id_admkeu','id_user','nama_admkeu'];

}