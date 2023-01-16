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
<<<<<<< HEAD
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_admkeu','user','nama_admkeu'];
=======
    // public $incrementing = false;
    // public $keyType = 'string';
    protected $fillable = ['id_admkeu','id_user','nama_admkeu'];

>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
}