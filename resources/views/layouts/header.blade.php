<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Major Scale</title>
</head>
<body>
    <div class="header">
        <div class="header_logo">
            <h1>Major Scale</h1>
        </div>
        <div class="header_right">
            @if(isset($loginInfo))
                <div class="header_user">
                    {{ $loginInfo['user_name'] }}
                </div>
                <div class="header_logout">
                    <a href="/logout">ログアウト</a>
                </div>
            @endif
        </div>
    </div>

    <div class="whole_wrapper">
        @if(isset($title))
            <div class="whole_title">
                {{ $title }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>