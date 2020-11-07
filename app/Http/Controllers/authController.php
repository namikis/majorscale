<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login_form(){
        return view('login_form')
                ->with('title', "sign in to Major Scale");
    }
}
