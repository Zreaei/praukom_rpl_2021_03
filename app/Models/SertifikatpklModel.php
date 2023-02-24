<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatpklModel extends Model
{
    use HasFactory;
    protected $table = 'sertifikat_pkl';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_sertifpkl';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_sertifpkl','id_nilaipkl'];
}
