@extends('layouts/header')
@section('content')
<div class="container">
        <div class="auth_wrapper">
            <form action="/signup/mail" method="post">
            {{ csrf_field() }}
                <div class="login_email">
                    <p>確認用のメールアドレスを入力してください。</p>
                    <div class="login_email_item">
                        <input type="text" name="email">
                    </div>
                </div>
                
                <div class="login_submit">
                    <input type="submit" value="送信">
                </div>
            </form>
            
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">