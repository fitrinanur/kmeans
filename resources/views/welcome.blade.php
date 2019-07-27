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
                background-color: #1f6fb2;
                background: linear-gradient(#1f6fb2, white);
                background: -webkit-linear-gradient(#1f6fb2, white);
                background: -o-linear-gradient(#1f6fb2, white);
                background: -moz-linear-gradient(#1f6fb2, white);
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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color: white" href="{{ route('login') }}">Login</a>

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
                                        <h3>"SISTEM PEMETAAN XXXX DENGAN ALGORITMA <i>K-Means Clustering</i> "</h3>
                                    </div>
                                    <hr/>
                                    <div class="presenter">
                                        <p>Wahyu Utomo <br>
                                            13.5.000xx <br>
                                            STMIK SINAR NUSANTARA <br>
                                            Surakarta
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
