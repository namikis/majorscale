<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function path(){
        $loginInfo = session('loginInfo');
        return view('path')
                ->with('loginInfo', $loginInfo);
    }
}
