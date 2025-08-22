@extends("layouts.login_register")
@section("title", "Reset Password")
@section("page:class", "login-page")
@section("content")

<style>
  body.login-page {
    background-color: #ffffff;
  }
  .login-box {
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>

<div class="login-box">
  <div class="login-logo">
    <a href="{{route('front.index')}}">
      <img src="{{ asset('assets/client/images/logo.png') }}" alt="Asis Real Estate Logo" style="max-height: 100px; width: auto; display: block; margin: 0 auto;">
    </a>
    <h3 style="color: #666; text-align: center; margin-top: 10px;">Reset Password</h3>
  </div>
  <br>
  @include("partials.alerts")
  <div class="login-box-body">
    <p class="login-box-msg">Enter your email address to request a password reset link.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <br>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
            </div>
        </div>
    </form>
    <a href="{{ route('login') }}" class="text-center">Back to Login</a>
  </div>
</div>
@endsection