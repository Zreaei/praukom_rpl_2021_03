<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $softDelete = false;
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id_user';
    public $keyType = 'string';
    protected $fillable = ['id_user','level','username','password','email'];

    public function level_user() {
        //many to one
        return $this->belongsTo(LevelModel::class, 'level', 'id_level');
    }
    public function asoip(): HasOne
     {
        //many to one
        return $this->HasOne(SiswaModel::class, 'user', 'id_user');
    }
}

// class User extends Authenticatable
// {
//     use HasApiTokens, HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     // protected $table = 'user';
//     // protected $primarykey = 'id_user';

//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array<string, string>
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
// }
