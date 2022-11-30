<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorModel extends Model
{
    use HasFactory;
    protected $table = 'operator';
    public $timestamps = false;     
    protected $primarykey = 'id_operator';
    protected $fillable = ['id_operator','user','nama_operator'];
}
