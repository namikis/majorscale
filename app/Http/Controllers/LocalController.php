<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logic\LocalLogic;
use App\Models\Local;

class LocalController extends Controller
{
    public function top(){
        $loginInfo = session('loginInfo');
        $posts = Local::getPostsById($loginInfo['user_id']);
        return view('local_top')
                ->with('title', "Local")
                ->with('posts', $posts);
    }

    public function post_form(){
        return view('local_post_form')
                ->with('title', "アンケート作成");
    }

    public function post(Request $request){
        $loginInfo = session('loginInfo');
        $post_title = $request->post_title;

        LocalLogic::Insert($request, $loginInfo['user_id']);
        
        return redirect('/local');
    }
    public function detail(Request $request){
        $post_id = $request->id;
        $posts = LocalLogic::PostList($post_id);
        return view('local_detail')
                ->with('posts', $posts)
                ->with('title',"詳細");
    }

    public function answer_form(Request $request){
        $post_id = $request->post_id;
        $posts = LocalLogic::PostList($post_id);
        return view('local_answer_form')
                ->with('posts', $posts)
                ->with('title',"回答");
    }

    public function answer(Request $request){
        LocalLogic::InsertFeedLogic($request);
        return view('answer_done');
    }
}
