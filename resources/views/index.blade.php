@extends('common')

@section('title', 'トップページ')

@section('head')
    <link href="css/index.css" rel="stylesheet" type="text/css">
@endsection

@section('header')
    <h1 class="title"><span>V</span>ide</h1>
    <p>『Vide』へようこそ</p>
    <p>電子工作/MIDI/プログラミングを主に取り扱っています．</p>
    <p class="since">Since 2021.07.24</p>
@endsection

@section('content')
    <div id="top-menu-container">
        <div class="top-picture">
            <img src="{{$topPicture}}" alt="Top Page Picture">
        </div>

        <div class="top-menu">
            <!--Bladeっぽいことします！-->
            <ul class="menu">
                @foreach($items as $item)
                    <li>
                        <div>
                            <h2><a href="{{$item['link']}}">{{$item['name']}}</a></h2>
                            <p>{{$item['desc']}}</p>
                            <p class="last-update">LAST UPDATE:{{$item['lastUpdate']}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

    <hr>

    <div class="update-history">
        <h2>更新履歴</h2>
        <!--更新履歴-->
        <label>
            <textarea rows="9" readonly>{{$updateHistory}}</textarea>
        </label>
    </div>
@endsection

@section('footer')

@endsection
