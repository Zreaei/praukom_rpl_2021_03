<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatverifModel extends Model
{
    use HasFactory;
    protected $table = 'sertifikat_verif';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_sertifverif';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_sertifverif','id_nilaiverif'];
}
