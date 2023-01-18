<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngkatanModel extends Model
{
    use HasFactory;
    protected $table = 'angkatan';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_angkatan';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_angkatan','tahun_angkatan'];
}
