<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\SignupEmail;
use App\Models\Logic\UserLogic;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Mail;

class authController extends Controller
{
    public function logout(Request $request){
        $request->session()->invalidate();

        return redirect('/');
    }

    public function login(Request $request){
        $pass = $request->pass;
        $email = $request->email;
        if(Auth::attempt(['email' => $email, 'password' => $pass])){
            $user = User::getByEmail($email);

            $user_info = [
                "user_name" => $user->name,
                "email" => $email,
                "user_id" => $user->id
            ];
            session()->put('loginInfo', $user_info);
            return redirect('/path');
        }
        return view('login_form');
    }

    public function login_form(){
        return view('login_form')
                ->with('title', "sign in to Major Scale");
    }

    public function pre_signup(){
        return view('pre_signup_form')
            ->with('title', "send E-mail to you");
    }

    public function send_mail(Request $request){
        $email = $request->email;
        $token = UserLogic::getToken();
        User::insertPre($email, $token);
        $data['token'] = $token;

        Mail::to($email)->send(new SignupEmail($data));
        return view('mail_sended');
    }

    public function register(Request $request){
        $token = $request->token;
        $pre_data = User::checkToken($token);
        if($pre_data != null){
            return view('register_form')
                    ->with('email', $pre_data->email)
                    ->with('token', $token)
                    ->with('title', 'sign up');
        }
        return view('top');
    }

    public function register_done(Request $request){
        $token = $request->token;
        $name = $request->name;
        $email = $request->email;
        $pass = Hash::make($request->pass);
        $id = User::insertUser($name, $email, $pass, $token);
        $user = [
            "user_name" => $name,
            "email" => $email,
            "user_id" => $id 
        ];
        $request->session()->put('loginInfo', $user);
        $loginInfo = session('loginInfo');
        return view('path')
                ->with('loginInfo', $loginInfo);
    }
}
