<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: url({{asset('surakarta-1.jpg')}}) no-repeat fixed;
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background-color: white;
                color: #1b1e21;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 2px 3px #888888;
                width: 900px;
                min-height: 400px;
                opacity: 0.9;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .presenter {
                font-family:"Roboto Mono Light for Powerline Std";
                font-size: 20px;
                color:black;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a style="color:white;background-color:blue;border-radius:4px;padding:4px;" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color: white" href="{{ route('login') }}">Login</a>
                        <a style="color: white" href= "{{ route('maps.index')}}">Maps</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a> --}}
                        {{-- @endif --}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="logo">
                                        <img src="{{asset('sinus.png')}}" alt="" style="width: 150px;height: 150px">
                                    </div>
                                    <div class="title">
                                        <h3>PEMETAAN SISTEM SATU ARAH BERDASARKAN TINGKAT KESIBUKAN JALAN KOTA SURAKARTA DENGAN METODE <br/><i>K-Means Clustering</i></h3>
                                    </div>
                                    <hr/>
                                    <div class="presenter">
                                        <p>Wahyu Utomo <br>
                                            13.5.00087
                                             <br><br>
                                            <strong>STMIK SINAR NUSANTARA </strong><br>
                                            <strong>Surakarta<strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
