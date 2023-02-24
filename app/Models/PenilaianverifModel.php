<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianverifModel extends Model
{
    use HasFactory;
    protected $table = 'penilaian_verif';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_nilaiverif';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaiverif','siswa','verifikator'];
}
