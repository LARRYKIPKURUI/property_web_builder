@extends("layouts.login_register")
@section("title", "Admin Register")
@section("page:class", "register-page")
@section("content")

<style>
  body.register-page {
    background-color:  #f2f2f2; /* Sets the body background to white */
  }
  .register-box {
    background-color: #ffffff; /* Sets the form background to a light grey */
    padding: 20px; /* Adds padding to the form box */
  }
</style>

<div class="register-box">
  <div class="register-logo">
    <a href="{{route('front.index')}}">
      <img src="{{ asset('assets/client/images/logo.png') }}" alt="Asis Real Estate Logo" style="max-height: 100px; width: auto; display: block; margin: 0 auto;">
    </a>
    <h3 style="color: #666; text-align: center; margin-top: 10px;"> Register</h3>
  </div>
   <br>
  @include("partials.alerts")

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
      {{csrf_field()}}

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button typ-e="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        </div>
    </form>

    <a href="{{ route('login') }}" class="text-center">I have registered already</a>
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