
<!--
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts 
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar 
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links 
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
          <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html> -->

@extends('layouts.app')

    @section('content')

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="float:right; margin-top:-60px;">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                                    <a class="dropdown-item" style="padding-left:20px;"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

                       <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-0px; margin-top:-220px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">

                                    </div>
                                </div>
                            </div>
                                                                             <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px; margin-top:-60px; "></center>

                            
                        <div class="container">
                             <div class="row">
                                <div class="col-md-6 col-sm-7 col-xs-7">
                                    <div class="typed-headline">
                                        <!--THE SECTION FOR THE TRANSITION(ANIMATED TEXT)-->
                                        <span class="h2 inline-block" style="margin-left:-250px; font-family:Roboto; font-weight:100; font-style:normal;">Welcome You To</span><br/>
                                        <span class="h2 typed-text typed-text--cursor color--secondary" style=" margin-left:-70px; font-family:Roboto; font-weight:100; font-style:normal;" data-typed-strings="Curator University Admin Portal,"></span>
                                    </div>
                                </div>

                                 <div class="col-md-3 col-sm-3 col-xs-3">
                                   
                                                                  
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                </div>
                            </div>
                                 
                        </div>
                      
                      

                           <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                             
                                 <a class="btn btn--primary" id="homepage_button" href="/trainingtabledata">
                                    <span class="btn__text" id="btn__text">
                                        Training Database
                                    </span>
                                </a>
                            
                                <!--end of modal instance-->
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                             
                                  <a class="btn btn--primary" id="homepage_button" href="/newworkspacedata">
                                    <span class="btn__text" id="btn__text">
                                        WorkSpace Database
                                    </span>
                                </a>
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        <!--end of row-->
                        <BR/><BR/>

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                 <a class="btn btn--primary" id="homepage_button" href="/onvisittabledata">
                                    <span class="btn__text" id="btn__text">
                                        On-Visit Database
                                    </span>
                                </a>
                                
                            </div>
                        
                            <div class="col-md-3 col-sm-4 col-xs-4">
                               
                            </div>

                            <div class="col-md-3 col-sm-4 col-xs-4">
                                
                            </div>
                        </div>

                        

                          <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-200px; margin-top:-500px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">
                                    
                                    </div>
                                </div>
                            </div>



    @endsection
      

