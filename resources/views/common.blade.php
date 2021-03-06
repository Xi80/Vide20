<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/common.css" rel="stylesheet"  type="text/css">
    <title>Vide - @yield('title')</title>
    @yield('head')
</head>

<body>
<header>
    @yield('header')
    <hr>
</header>

<div class="content">
    @yield('content')
    <hr>
</div>

<footer>
    @yield('footer')
    <p>This Website works on Laravel.</p>
    <p>Copyright 2021 Luna Tsukinashi</p>
    <p>Vide {{$version}}</p>
</footer>
</body>
</html>
