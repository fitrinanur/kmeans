<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <style>
    body{
        background: url({{asset('login_image.jpg')}}) no-repeat fixed;
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
    }
    .card-header {
        background-color : white !important;
    }

    .logo{
        display:inline-flex;
    }
    .logo1 {
        height: 155px;
        width: 160px;
        margin:10px;
    }
    .logo2 {
        height: 155px;
        width: 160px;
        margin-left:62px;
    }
    .card-header>h3 {
        text-align:center;   
        font-family: 'Yanone Kaffeesatz',sans-serif;
        letter-spacing:3px;
        background-color : #0469D9;
        color: white;
    }
    </style>
</head>

<body>
    <div class="main">
        @yield('content')
    </div>
</body>
