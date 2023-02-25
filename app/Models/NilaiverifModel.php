<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiverifModel extends Model
{
    use HasFactory;
    protected $table = 'nilai_verifikasi';
    protected $softDelete = false;
    public $timestamps = false;
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_nilaiverif','kategori_nilai','verifikator','verifikasi','jml_nilaiverif','predikat_nilaiverif'];
}
