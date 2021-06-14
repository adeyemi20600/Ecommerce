@extends('layouts.header1')
@section('title','Login')
@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection('css')
@section('content')
<div class="container-fluid">
    <div class="wrapper">
        @if(session('success'))
        <div class="alert alert-success text-center">{{session('success')}}</div>
        @endif

        @if(session('fail'))
        <div class="alert alert-danger text-center">{{session('fail')}}</div>
        @endif
        <div class="login-header">Login</div>
        <a class="form-control btn btn-primary rounded-pill" href="/auth/redirect">Login with facebook</a>

        <div class="login-header2">Login with email</div>
        <form method="post" action="login">
            @csrf
            <div class="form-group">
                <input class="form-control rounded-pill" type="email" name="email" placeholder="email"
                    value="{{old('email')}}">
                <div class="text-danger">{{$errors->first('email')}}</div>
            </div>
            <div class="form-group">
                <input class="form-control rounded-pill" type="password" name="password" placeholder="password"
                    value="{{old('password')}}">
                <div class="text-danger">{{$errors->first('password')}}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary form-control rounded-pill">Login</button>
            </div>
        </form>
        <div class="row">
            <div class="col text-center">
                <p>Don't have an account? <a href="/registration">Sign up</a></p>
            </div>
        </div>
    </div>
</div>
@endsection('content')