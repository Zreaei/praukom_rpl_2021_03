<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'level_user';  
    protected $primarykey = 'id_level';
    protected $fillable = ['id_level','nama_level'];

    public function user(){

        // kalo relasi hasmany itu satu table memiliki one to many
        return $this->hasOne(User::class, 'level', 'id_level');
    }
}
