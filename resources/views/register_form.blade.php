@extends('layouts/header')
@section('content')
<div class="container">
        <div class="auth_wrapper">
            @if(count($errors) > 0)
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li><div class="error_msg">{{ $error }}</div></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/signup/register" method="post">
            {{ csrf_field() }}
                <div class="login_email inp_item">
                    <p>ニックネーム</p>
                    <div class="login_name_item">
                        <input type="text" name="name">
                    </div>
                </div>

                <div class="login_pass inp_item">
                    <p>パスワード</p>
                    <div class="login_pass_item">
                        <input type="password" name="pass">
                    </div>
                </div>
                <div class="login_pass inp_item">
                    <p>再確認パスワード</p>
                    <div class="login_pass_item">
                        <input type="password" name="confirm_pass">
                    </div>
                </div>
                <input type="hidden" value="{{ $email }}" name="email">
                <input type="hidden" value="{{ $token }}" name="token">

                
                <div class="login_submit">
                    <button type="submit" class="button">sign up</button>
                </div>
            </form>
            
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">