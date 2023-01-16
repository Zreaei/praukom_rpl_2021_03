<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_jurusan';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_jurusan','kaprog','bidang_keahlian','program_keahlian'];
}
