@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-12 col-xs-12">
      <div class="login-form login-area">
        <h3>
          @lang('Login')
        </h3>
        <form role="form" class="login-form" method="post" action="{{ route('login') }}">
          @csrf

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="lni-envelope"></i>
              </span>
            </div>
            <input type="text" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="@lang('Email address')" value="{{ old('email') }}">
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
              </div>
          </div> 

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="lni-lock"></i>
              </span>
            </div>
            <input type="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="@lang('Password')">
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
              </div>
          </div> 
                  
          <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="remember" value="1" checked class="custom-control-input" id="remember-field">
              <label class="custom-control-label" for="remember-field">@lang('Keep me logged in')</label>
            </div>
            <a class="forgetpassword" href="{{ route('password.request', ['source' => 'login']) }}">@lang('Forgot Password?')</a>
          </div>
          <div class="text-center">
            <button class="btn btn-common log-btn">@lang('Log in')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
