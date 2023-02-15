<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorModel extends Model
{
    use HasFactory;
    protected $table = 'operator';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_operator';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_operator','user'];
}
