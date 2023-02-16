<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'admin';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_admin';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_admin','user'];
}
