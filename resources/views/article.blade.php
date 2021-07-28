@extends('common')

@section('title',"{$articleName}")

@section('head')
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/article.css" rel="stylesheet" type="text/css">
@endsection

@section('header')
    <h1 class="article-title">{{$articleName}}</h1>
    <p class="article-desc">{!!$articleDesc!!}</p>
    <p class="article-date">{!! $articleDate !!}</p>
@endsection

@section('content')
    @foreach($articleBody as $articleItem)
        <h2>{!!$articleItem['index']!!}</h2>
        <p>{!! $articleItem['body']!!}</p>
    @endforeach
@endsection

@section('footer')
    {!!$articleAppendix!!}
@endsection
