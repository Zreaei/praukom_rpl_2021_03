<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WkhubinModel extends Model
{
    use HasFactory;
    protected $table = 'waka_hubin';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_wkhubin';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_wkhubin','nip_wkhubin','nama_wkhubin','user'];
}