<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function top(){
        return view('local_top')
                ->with('title', "Local");
    }

    public function post_form(){
        return view('local_post_form')
                ->with('title', "アンケート作成");
    }
}
