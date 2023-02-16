<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WalasModel extends Model
{
    use HasFactory;
    protected $table = 'walas';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_walas';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_walas','nip_walas','nama_walas','user'];
}