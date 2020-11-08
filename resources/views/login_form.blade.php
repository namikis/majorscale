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
            <form action="/login" method="post">
            {{ csrf_field() }}
                <div class="login_email inp_item">
                    <p>E-mail</p>
                    <div class="login_email_item">
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="login_pass inp_item">
                    <p>Password</p>
                    <div class="login_pass_item">
                        <input type="password" name="pass">
                    </div>
                </div>
                <div class="inp_item auth_path">
                    <div class="login_submit to_button">
                        <button type="submit" class="button">sign in</button>
                    </div>
                
                    <div class="to_register to_button">
                        <button class="button"><a href="/signup/pre">sign up</a></button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">