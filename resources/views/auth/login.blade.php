@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container pos-vertical-center">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-xs-4" style="margin-left:-220px; margin-top:-120px;"> 
                                             <a href="/" style="color:white; font-weight:bold; text-decoration:none;"><img style="width:30px" src="{{asset('externalFolder')}}/img/homepage2.jpg" />Home</a>
                                    </div>
                                    
                                      <div class="col-sm-8 col-md-8 col-xs-8">

                                    </div>
                                </div>
                            </div>
                                                <center> <img src="{{asset('externalFolder')}}/img/coven3.png" style="width: 50px; margin-top:-200px;"></center>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <center>    <div class="card-header" style="font-size:28px;  color:white; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">{{ __('Admin Login') }}</div></center>
<br/>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label text-md-right" style="font-size:18px;  color:white; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right" style="font-size:18px;  color:white; font-family: 'Goudy Bookletter 1911', serif; font-weight:100; font-style:normal;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
<br/><br/>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
