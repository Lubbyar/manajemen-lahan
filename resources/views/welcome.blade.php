<!DOCTYPE html>
<html lang="en">
    @extends('layouts.auth')
    @section('content')



        <!-- <div class="card">
            <div class="card-header">
                <h4 class="card-title">Managemen Lahan </h4>
                <div class="ml-auto card-header-action">
                    <a href="{{route('login')}}" class="btn btn-outline-primary">Login</a>
                    <a href="{{ url('/register') }}" class="btn btn-outline-primary">Register</a>
            </div>

            </div>
        </div> -->

    @endsection
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Management Lahan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('{{('assets/img/lahan.jpg')}}');;
                background-size:cover;
                /* color: #636b6f; */
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
            }
            .title {
                font-size: 84px;
                color:#ffffff;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">




                <div class="title m-b-md">

                    Management Lahan

                <div class="card-hearder">
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                {{-- <a href="{{url('tamu') }}" class="btn btn-primary">Sebagai Tamu</a> --}}
                </div>

                <!-- <div class="card-header"> -->

                <!-- <h4 class="card-title">Managemen Lahan </h4> -->
                <!-- <div class="ml-auto card-header-action">

                </div> -->

                <!-- </div> -->
                </div>
                </div>

                <!-- <div class="links">
                     <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a> -->

                <!-- </div> -->

        </div>
    </body>
</html>
