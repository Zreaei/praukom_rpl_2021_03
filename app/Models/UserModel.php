<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'user'; 
    protected $softDelete = false;
    public $timestamps = false;
    protected $primarykey = 'id_user';
=======
    protected $table = 'user';  
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_user';
>>>>>>> 7f1c43734efdea184a45248cb6cf85f885867646
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_user','level','username','password','email'];
}
