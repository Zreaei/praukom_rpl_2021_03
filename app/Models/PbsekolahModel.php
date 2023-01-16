<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PbsekolahModel extends Model
{
    use HasFactory;
    protected $table = 'pb_sekolah';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'nip_pbsekolah';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nip_pbsekolah','nama_pbsekolah','telp_pbsekolah','user'];
}