@extends('layouts/header')
@section('content')
    <div class="container">
    <form action="/local/answer" method="post">
            {{ csrf_field() }}
        <div class="post_detail_wrapper">
            <div class="post_detail_title">
                {{ $posts[0]["post_title"] }}
            </div>
            <div class="detail_queses">
                @foreach($posts as $post)
                    <div class="detail_ques">
                        <p>〇{{ $post["q_title"] }}</p>
                            @if($post["q_type"] == 0)
                            <div class="detail_items">
                                @foreach($post["items"] as $item)
                                    <div class="detail_item">
                                        <input type="radio" value={{$item->id}} name={{$post["q_title"]}}>{{ $item->item }}
                                    </div>
                                @endforeach
                            </div>
                            @else
                                <div class="detail_items">
                                    <input type="text" name={{$post["q_title"]}}>
                                </div>
                            @endif
                    </div>
                    <input type="hidden" name="q_titles[]" value={{$post["q_title"]}}>
                @endforeach
            </div>
        </div>
        <div class="to_ans">
            <input type="hidden" value={{$posts[0]["post_id"]}} name="post_id">
            <input type="submit" value="送信する" class="button">
        </div>
    </form>
    </div>
@endsection

<style>
    .post_detail_wrapper{
        width:60%;
        margin:30px auto;
    }

    .post_detail_title{
        font-size:40px;
        margin-bottom:20px;
        padding-top: 30px;
    }

    .detail_ques{
        margin:10px 0;
    }

    .detail_ques p{
        font-size:28px;
        margin:5px 0
    }

    .detail_items{
        display:flex;
        justify-content: space-around;
    }

    .detail_item{
        font-size:25px;
        margin:10px 0;
    }

    .to_ans{
        margin-top:50px;
        text-align:center;
    }
</style>