@extends('layouts/header')
@section('content')
<div class="container">
        <div class="auth_wrapper">
            <form action="/signup/register" method="post">
            {{ csrf_field() }}
                <div class="login_email">
                    <p>ニックネーム</p>
                    <div class="login_name_item">
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="login_email">
                    <p>パスワード</p>
                    <div class="login_pass_item">
                        <input type="password" name="pass">
                    </div>
                </div>
                <input type="hidden" value="{{ $email }}" name="email">
                <input type="hidden" value="{{ $token }}" name="token">

                
                <div class="login_submit">
                    <input type="submit" value="sign up">
                </div>
            </form>
            
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">