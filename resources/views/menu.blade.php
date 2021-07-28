@extends('common')

@section('title',"{$menuName}")

@section('head')
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
@endsection

@section('header')
    <h1 class="top-menu-title top-menu">{{$menuName}}</h1>
    <p class="top-menu-desc top-menu">{!!$menuDesc!!}</p>
@endsection

@section('content')
    <ul class="menu">
        @foreach($items as $item)
            <li>
                <div>
                    <img class="item-pic" src="{{$item['picture']}}" alt="item picture">
                    <div class="item-desc">
                        <h2><a href="{{$item['link']}}">{{$item['name']}}</a></h2>
                        <p class="date">{{$item['date']}}</p>
                        <p>{!!$item['desc']!!}</p>
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
@endsection

@section('footer')

@endsection
