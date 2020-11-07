<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserLogic extends Model
{
    use HasFactory;

    public static function getToken(){
        $token = null;
        for($i = 0; $i < 10; $i++){
            $token = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 255);
            if(User::checkToken($token)){
                break;
            }
        }
        return $token;
    }
}
