@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-12 col-xs-12">
      <div class="forgot login-area">
        <h3>
          Forgot Password
        </h3>
        <form role="form" class="login-form">
          <div class="form-group">
            <div class="input-icon">
              <i class="icon lni-user"></i>
              <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>     
          <div class="text-center">
            <button class="btn btn-common log-btn">@lang('Send Reset Link')</button>
          </div>
          <div class="form-group mt-4">
            <ul class="form-links">
              <li class="float-left"><a href="{{ route('register', ['source' => 'password']) }}">@lang('Don\'t have an account?')</a></li>
              <li class="float-right"><a href="{{ route('login', ['rouce' => 'password']) }}">@lang('Back to Login')</a></li>
            </ul>
          </div>  
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
