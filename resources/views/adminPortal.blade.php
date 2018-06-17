<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif 

            <div class="content">
                <div class="title m-b-md" style="font-size:40px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">
                    ADMIN PORTAL
                </div>

            

                 @if (Route::has('login'))
                <div class=" links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="font-size:20px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">Login</a>
                        <a href="{{ route('register') }}" style="font-size:20px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">Register</a>
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </body>
</html> -->


@extends('layouts.app')

@section('content')
<div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-220px; margin-top:-200px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">

                                    </div>
                                </div>
                            </div>
                                            <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px; margin-top:-350px;"></center>

<div class="container">
         <div class="flex-center position-ref full-height">
         <!--   @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif  -->

            <div class="content">
                <div class="title m-b-md" style="font-size:40px; color:white; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">
                    ADMIN PORTAL
                </div>

            <br/><br/>

                 @if (Route::has('login'))
                <div class=" links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                       <button class="btn btn-primary" style="width:12%;"> <a href="{{ route('login') }}" style="font-size:20px;  color:white; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal; text-decoration:none">Login</a></button>
                        <!--<button class="btn btn-primary" style="width:12%;"><a href="{{ route('register') }}" style="font-size:20px; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal; text-decoration:none">Register</a></button>-->
                    @endauth
                </div>
            @endif
            </div>
        </div>
</div>


@endsection
