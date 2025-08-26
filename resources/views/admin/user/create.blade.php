@extends("layouts.admin")
@section("title", "Add New User")

@section("content")

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add New User
      <small>Create a new user profile</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('admin.user.index')}}">Users</a></li>
      <li class="active"><a href="#">Add New User</a></li>
    </ol>
    <br>
    @include("partials.alerts")
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">User Information</h3>
          </div>
          <form role="form" method="POST" action="{{ route('admin.user.store') }}">
            {{ csrf_field() }}

            <div class="box-body">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="first_name" id="firstName" placeholder="Enter first name" required>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Enter last name" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
            </div>
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-primary btn-lg">Add User</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section("page:scripts")
@endsection