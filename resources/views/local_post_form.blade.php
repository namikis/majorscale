@extends('layouts/header')
@section('content')
    <div class="container">
        <div class="l_post_wrapper">
        <form action="/local/post" method="post">
            {{ csrf_field() }}
            <input type="hidden" >
            <div class="post_title_wrapper">
                <h1>タイトル</h1>
                <div class="title_input">
                    <input type="text" name="post_title">
                </div>
            </div>
            <div class="post_1 l_post">
                <h1>post1</h1>
                <div class="post_input">
                    <h2>見出しタイトル</h2>
                    <input type="text" name="q_title_1">
                    <h3>選択肢1</h3>
                    <input type="text" name="item_1_1">
                    <h3>選択肢2</h3>
                    <input type="text" name="item_1_2">
                    <h3>選択肢3</h3>
                    <input type="text" name="item_1_3">
                </div>
            </div>
            <div class="post_2 l_post">
                <h1>post2</h1>
                <div class="post_input">
                    <h2>見出しタイトル</h2>
                    <input type="text" name="q_title_2">
                    <h3>選択肢1</h3>
                    <input type="text" name="item_2_1">
                    <h3>選択肢2</h3>
                    <input type="text" name="item_2_2">
                    <h3>選択肢3</h3>
                    <input type="text" name="item_2_3">
                </div>
            </div>
            <div class="post_3 l_post">
                <h1>post3</h1>
                <div class="post_input">
                <h2>見出しタイトル</h2>
                    <input type="text" name="q_title_3">
                    <h3>選択肢1</h3>
                    <input type="text" name="item_3_1">
                    <h3>選択肢2</h3>
                    <input type="text" name="item_3_2">
                    <h3>選択肢3</h3>
                    <input type="text" name="item_3_3">
                </div>
            </div>
            <div class="l_submit_wrapper">
                <input type="submit" class="button l_submit" value="作成">
            </div>
        </form>
        </div>
    </div>
@endsection

<style>
    .l_post_wrapper{
        padding:5%;
    }
    .l_post{
        margin:20px 0;
    }
</style>