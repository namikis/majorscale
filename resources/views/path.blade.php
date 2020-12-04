@extends('layouts/header')
@section('content')
    <div class="path_wrapper">
        <div class="path_links">
            <div class="path_link">
            <p>Local</p>
                <a href="/local">local</a>
            </div>
            <div class="path_link">
            <p>Global</p>
                <a href="/global">global</a>
            </div>
        </div>
        <div class="path_about">
            <div class="about_local p_about">
                <h2>Localアンケート</h2>
                <p>ネットワークを使用せず作成者の端末から入力するフォーム。主に実験用。</p>
            </div>
            <div class="about_global p_about">
                <h2>Globalアンケート</h2>
                <p>ネットワークで共有し、気になったことや多くの人からの意見を調査するためのフォーム。</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .path_wrapper{
        width:60%;
        margin:10% auto;
        
    }

    .path_links{
        display:flex;
        justify-content:space-between;
    }

    .path_link{
        position:relative;
        margin:0 13%;
        padding:30px;
        background:#A01C38;
    }
    .path_link a{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
        }
    .path_link:hover{
        opacity:0.9;
    }
    .path_link p{
        font-size:70px;
        color:#E8D93A;
    }

    .path_about{
        margin-top:10%;
    }

    .p_about{
        margin:10px;
        padding: 0 13%;
    }
</style>