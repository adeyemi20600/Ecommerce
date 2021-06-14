@extends('layouts.header1')
@section('title', 'Registration')
@section('css')
<link rel="stylesheet" href="{{@asset('css/registration.css')}}">
@endsection('css')
@section('content')
<div class="main-container">
    <div class="signup-form">
        <form action="registration" method="post">
            @csrf
            <h2>Register</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name"
                            value="{{old('first_name')}}" requirred>
                        <div class="text-danger">{{$errors->first('first_name')}}</div>
                    </div>
                    <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name"
                            requirred value="{{old('last_name')}}">
                        <div class="text-danger">{{$errors->first('last_name')}}</div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="email" class="form-control" name="customer_email" placeholder="Email"
                            value="{{old('customer_email')}}" requirred>
                        <div class="text-danger">{{$errors->first('customer_email')}}</div>
                    </div>
                    <div class="col">
                        <div class="gender_label">
                            <label class="form-label">Gender</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male"
                                @if(old("gender")=='male' ) checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female"
                                @if(old("gender")=='female' ) checked @endif>
                            <label class="form-check-label" for="inlineRadio2">female</label>
                        </div>
                        <div class="text-danger">{{$errors->first('gender')}}</div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            value="{{old('password')}}" requirred>
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    </div>
                    <div class="col"><input type="text" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" password_confirmation
                            value="{{old('password_confirmation')}}" requirred>
                        <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control" name="address" value="{{old('address')}}"
                            placeholder="Address">
                        <div class="text-danger">{{$errors->first('address')}}</div>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary form-control">Sign-up</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="referral">Don't have an Account? <a href="/login">Login Here</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')