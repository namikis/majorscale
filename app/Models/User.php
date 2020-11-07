<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public static function getByEmail($email){
        return DB::table('users')
                ->where('email', $email)
                ->first();
        
    }

    public static function insertUser($name, $email, $pass, $token){
        DB::table('pre_registers')
                ->where('token', $token)->delete();
        $data = [
            "name" => $name,
            "email" => $email,
            "password" => $pass
        ];
        DB::table('users')->insert($data);
        return DB::getPdo()->lastInsertId();

    }

    public static function checkToken($token){
        return DB::table('pre_registers')
                ->where('token', $token)
                ->first();
    }

    public static function insertPre($email, $token){
        $data = [
            "email" => $email,
            "token" => $token
        ];
        DB::table('pre_registers')
            ->insert($data);
    }
    


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
