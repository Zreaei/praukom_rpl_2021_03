<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiModel extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_agenda';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_agenda','status_agenda','keterangan_agenda','tgl_agenda','foto'];
}
