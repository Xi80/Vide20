@extends('common')

@section('title',"{$menuName}")

@section('head')
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
@endsection

@section('header')
    <h1 class="menu-title">{{$menuName}}</h1>
    <p class="menu-desc">{{$menuDesc}}</p>
@endsection

@section('content')
    <ul class="menu">
        @foreach($items as $item)
            <li>
                <div>
                    <img class="item-pic" src="{{$item['picture']}}" alt="item picture">
                    <div class="item-desc">
                        <h2><a href="{{$item['link']}}">{{$item['name']}}</a></h2>
                        <p>{{$item['desc']}}</p>
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
@endsection

@section('footer')

@endsection
