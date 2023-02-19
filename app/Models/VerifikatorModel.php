<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifikatorModel extends Model
{
    use HasFactory;
    protected $table = 'verifikator';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_verifikator';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_verifikator','nip_verifikator','nama_verifikator','user'];
}