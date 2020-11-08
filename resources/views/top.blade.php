

<div class="top_wrapper">
    <div class="top_title">
        <h1>Major Scale</h1>
    </div>
    <div class="top_content">
        <div class="top_passage">
            <p>アンケート作成・集計サイト</p>
            <p>研究のデータ収集や人の意見を聞きたいときに。</p>
        </div>
        <div class="top_link">
            <p>はじめる</p>
            <a href="/login">はじめる</a>
        </div>
        </div>
</div>

<style>
        a{
        text-decoration: none;
    }

    html,body,div,h1,h2,h3,h4,h5{
        padding:0;
        margin:0;
    }

    body{
        background:#A01C38;
    }

    .top_title{
        text-align:center;
        margin:100px;
    }
    .top_title h1{
        color:#E8D93A;
        font-size:100px;
    }

    .top_content{
        display:flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .top_link, .top_passage{
        border-radius:50%;
        background:white;
        padding:40px;
    }

    .top_passage p{
        font-size:30px;
        font-weight:bold;
    }

    .top_link{
        position:relative;
        transition-duration:0.5s;
    }
    .top_link:hover{
        transform:scale(1.3);
        transition-duration:0.5s;
    }

    .top_link a{
        font-size:30px;
        font-weight:bold;
        color:black;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        text-decoration: none;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
    }

    .top_link p{
        font-size:30px;
        font-weight:bold;
    }
</style>

<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/top.js')}}" type="text/javascript"></script>