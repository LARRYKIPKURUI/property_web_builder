@extends("layouts.login_register")
@section("title", "Admin Login")
@section("page:class", "login-page")
@section("content")

<style>
  body.login-page {
    background-color: #f2f2f2 ;/* Sets the body background to white */
  }
  .login-box {
    background-color:#ffffff ; /* Sets the form background to a light grey */
    padding: 20px; /* Optional: adds some padding to the form box */
  }
</style>

<div class="login-box">
  <div class="login-logo">
    <a href="{{route('front.index')}}">
      <img src="{{ asset('assets/client/images/logo.png') }}" alt="Asis Real Estate Logo" style="max-height: 100px; width: auto; display: block; margin: 0 auto;">
    </a>
    <h3 style="color: #666; text-align: center; margin-top: 16px;"> Login</h3>
  </div>
  <br>
  @include("partials.alerts")
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post" action="{{ route('login') }}">
      {{csrf_field()}}
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
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <br>
      @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

    <a href="{{ route('password.request') }}">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

  </div>
</div>
@endsection
@section("page:scripts")

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@endsection