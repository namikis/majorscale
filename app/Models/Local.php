<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Local extends Model
{
    use HasFactory;

    public static function InsertPost($post_title, $user_id){
        $data = [
            "title" => $post_title,
            "user_id" => $user_id
        ];
        DB::table('local_posts')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public static function InsertQueses($q_title,$post_id,$q_type,$user_id){
        $data = [
            "post_id" => $post_id,
            "q_title" => $q_title,
            "q_type" => $q_type
        ];
        DB::table('local_queses')->insert($data);
        return DB::getPdo()->lastInsertId();
    }

    public static function InsertItem($item,$q_id){
        $data = [
            "q_id" => $q_id,
            "item" => $item
        ];
        DB::table('local_items')->insert($data);
    }

    public static function getPostsById($user_id){
        return $posts = DB::table('local_posts')
                    ->where('user_id', $user_id)
                    ->get();
    }

    public static function getPostAndQues($post_id){
        return DB::table('local_posts')
                    ->join('local_queses','local_posts.id','=','local_queses.post_id')
                    ->where('local_posts.id',$post_id)
                    ->get();
    }

    public static function getItems($q_id){
        return DB::table('local_items')
                ->where('q_id',$q_id)
                ->get();
    }
}
