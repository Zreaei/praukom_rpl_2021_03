<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogModel extends Model
{
    use HasFactory;
    protected $table = 'log_admin_user';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_log_user';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_log_user','nama_event','waktu_event','id_user','username'];
}
