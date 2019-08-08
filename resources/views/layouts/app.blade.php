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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Montserrat:800|Source+Sans+Pro:400,700&display=swap"
        rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            /* background-image: url("{{ asset('simple-pattern.jpeg') }}") ; */
            background-repeat: repeat-x repeat-y;
        }

        .top-header {
            background-color: #3F1871;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .top-right {
            float: right;
        }

        .top-nav {
            float: left;
        }

        .top-title-nav>a {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 700;
            font-size: 20px;
        }

        .header-info>ul {
            list-style-type: none;
            display: inline-flex;
            padding: 5px;
        }

        .header-info>ul>li {
            padding: 2px 10px;
            margin-left: 10px;
        }

        .header-info>ul>li>a {
            color: white;
            font-size: 25px;
        }

        .navbar {
            padding: 13px !important;
        }

        .navbar-collapse {
            padding: 10px !important;
        }

        .navbar-collapse>ul>li>a {
            font-family: 'Source Sans Pro', sans-serif;
            color: #888888;
            font-weight: 600;
            font-size: 18px !important;
            line-height: 23px !important;
            text-transform: capitalize !important;
            padding: 7px !important;
            margin: 10px !important;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #3F1871;
            color: white;
            text-align: center;
            font-size: 14px;
            padding: 10px;
        }

    

        footer > .phone_number {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
        }

        .copyright > p {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 16px;
        }
        footer > .phone_number > p, a {
            color: white;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 16px;
        }

        footer .number_pengaduan {
            color: white;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 16px;
        }

    </style>
</head>

<body>
    <div id="app">
        <header id="header" class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <nav class="top-nav">
                                <div class="top-title-nav">
                                    <a href="http://dishub.surakarta.go.id"
                                        target="_blank">Webmail</a>
                                </div>
                            </nav>
                        </div>

                        <div class="col-md-6">
                            <div class="top-right">
                                <div class="header-info">
                                    <ul class="header-social">
                                        <li><a href="https://facebook.com/pages/category/Government-Organization/DINAS-PERHUBUNGAN-KOTA-SURAKARTA-229744893730893/" title="facebook"
                                                target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/dishubsurakarta?lang=en" title="Twitter"
                                                target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://instagram.com/dishubsurakarta?igshid=frexnoi3er7n" title="Instagram"
                                                target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://www.youtube.com/user/MrDishub"
                                                title="Youtube" target="_blank"><i class="fa fa-youtube"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div><!-- .header-info -->
                            </div><!-- .top-right -->
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-header -->
        </header>
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#888888;font-family: 'Source Sans Pro', sans-serif;font-weight:600; font-size: 18px !important;
                line-height: 23px !important;">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Kmeans
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Data Master
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('road.index')}}">Data Jalan</a>
                                <a class="dropdown-item" href="{{ route('user.index')}}">Data User</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('proses.index')}}">Proses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('maps.index')}}">Maps</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

        </main>
        <footer id="footer" class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>Copyright © 2017 Dinas Perhubungan Surakarta</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="pull-right number_pengaduan">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p>Pengaduan 
                                    </p>
                                </div>
                                <div class="col-lg-8 phone_number" >
                                    <p>
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> &nbsp;
                                         <a href="https://wa.me/628112654322">0811-265-4322</a> 
                                    </p>      
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @stack('scripts');
</body>

</html>
