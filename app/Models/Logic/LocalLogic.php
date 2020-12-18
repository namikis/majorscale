<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Local;


class LocalLogic extends Model
{
    use HasFactory;
    public static function Insert($request, $user_id){

        $post_id = Local::InsertPost($request->post_title, $user_id);

        $q_titles = $request->q_title;
        $item_counts = $request->item_count;
        $items = $request->item;
        $q_counts = $request->q_count;

        $k=0;
        $q_type = 0;
        for($i = 0; $i < (int)$q_counts; $i++){
            $item_count = (int)$item_counts[$i];
            if($item_count == 1){
                $q_type = 1;
            }
            $q_title = $q_titles[$i];

            $q_id = Local::InsertQueses($q_title,$post_id,$q_type,$user_id);
            
            for($j=0;$j<$item_count;$j++){
                Local::InsertItem($items[$j+$k],$q_id);
            }
            $k += $item_count;
        }
    }
}
