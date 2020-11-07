@extends('layouts/header')

@section('content')
    <div class="container">
        <div class="auth_wrapper">
            <form action="/login" method="post">
            {{ csrf_field() }}
                <div class="login_email">
                    <p>E-mail</p>
                    <div class="login_email_item">
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="login_pass">
                    <p>Password</p>
                    <div class="login_pass_item">
                        <input type="password" name="pass">
                    </div>
                </div>
                <div class="login_submit">
                    <input type="submit" value="sign in">
                </div>
            </form>
            <div class="to_register">
                <a href="/signup/pre">signup</a>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">