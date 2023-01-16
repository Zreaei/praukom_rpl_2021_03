<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'user'; 
    protected $softDelete = false;
    public $timestamps = false;
    protected $primarykey = 'id_user';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_user','level','username','password','email'];
}
