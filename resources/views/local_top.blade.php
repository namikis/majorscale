@extends('layouts/header')
@section('content')
    <div class="local_top_wrapper">
        <div class="local_index_wrapper">
            <h2>一覧</h2>
            <div class="local_posts">
                @foreach($posts as $post)
                    <div class="local_post">
                        <a href="/local/detail/{{$post->id}}">{{ $post->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="local_post_wrapper">
            <div class="local_post_form">
                <a href="/local/post">アンケートを作成する</a>
            </div>
        </div>
    </div>
@endsection

<style>
    .local_posts{
        width:60%;
        margin:20px auto;
    }

    .local_post{
        
    }

    .local_post a{
        display:block;
        border-radius:30px;
        background:#A01C38;
        font-size:25px;
        color:#E8D93A;
        padding:10px 10px 10px 30px;
        margin-top:20px;
    }
    
    .local_top_wrapper{
        max-width:1140px;
        margin:0 auto 100px auto;
    }
    .local_index_wrapper{
        border:2px solid black;
        margin:20px;
    }

    .local_post_wrapper{
        max-width:60%;
        margin:30px auto 100px auto;
    }

    .local_post_form a{
        text-align:center;
        display:block;
        border-radius:18px;
        background:#A01C38;
        font-size:25px;
        color:#E8D93A;
        padding:10px;
    }

    .local_post_form a:hover{
        opacity:0.9;
    }
</style>