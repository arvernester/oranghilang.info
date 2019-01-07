@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-12 col-xs-12">
      <div class="register-form login-area">
        <h3>
          @lang('Register')
        </h3>
        <form class="login-form" method="post" action="{{ route('register') }}">
          @csrf

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="lni-user"></i>
              </span>
            </div>
            <input type="text" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="@lang('Full name')">
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
              </div>
          </div> 
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="lni-envelope"></i>
              </span>
            </div>
            <input type="text" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="@lang('Email address')">
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

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="lni-lock"></i>
              </span>
            </div>
            <input type="password" id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" placeholder="@lang('Password confirmation')">
            <div class="invalid-feedback">
                {{ $errors->first('password_confirmation') }}
              </div>
          </div> 
          
          <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkedall">
              <label class="custom-control-label" for="checkedall">@lang('By registering, you accept our Terms & Conditions')</label>
            </div>
          </div>   
          <div class="text-center">
            <button class="btn btn-common log-btn" type="submit">@lang('Register')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
