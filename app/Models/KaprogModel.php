<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaprogModel extends Model
{
    use HasFactory;
    protected $table = 'kaprog';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'nip_kaprog';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nip_kaprog','nama_kaprog','user'];
}