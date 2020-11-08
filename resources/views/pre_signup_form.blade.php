@extends('layouts/header')
@section('content')
<div class="container">
        <div class="auth_wrapper">
        @if(isset($message))
        <div class="auth_message">
            {{ $message }}
        </div>
        @endif
            <form action="/signup/mail" method="post">
            {{ csrf_field() }}
                <div class="login_email inp_item">
                    <p>登録用のメールアドレスを入力してください。</p>
                    <div class="login_email_item inp_item">
                        <input type="text" name="email">
                    </div>
                </div>
                
                <div class="login_submit">
                    <button type="submit" class="button">送信</button>
                </div>
            </form>
            
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<style>
    .auth_message{
        margin:10px 0;
        color:red;
    }
</style>