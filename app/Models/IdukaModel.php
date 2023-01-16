<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdukaModel extends Model
{
    use HasFactory;
    protected $table = 'iduka';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_iduka';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_iduka','nama_iduka','pimpinan_iduka','alamat_iduka','telp_iduka'];
}
