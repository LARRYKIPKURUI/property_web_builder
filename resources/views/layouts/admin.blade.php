<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title>@yield('title') | {{config("app.name")}}</title> -->
   <title>Asis Real Estate</title>
   <link rel="icon" type="image/png" href="{{ asset('assets/front/images/favicon.png') }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/iCheck/square/blue.css')}}">
  <!-- page styles -->
  <!-- blockUI -->
  <link rel="stylesheet" href="{{asset('assets/css/blockui.min.css')}}">
 
   @yield("page:styles")


  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/AdminLTE.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/skins/_all-skins.css')}}">

 <script type="text/javascript">
   var token = "{{csrf_token()}}";
   var baseUrl = "{{url('/')}}";
 </script>
  
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><Re>A.R.E</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b class="mx-3">Home</b>   </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('assets/admin/img/avatar5.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('assets/admin/img/avatar5.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->first_name.' '.Auth::user()->last_name}} 
                  <small>Asis Real Estate and Property management Company Ltd.</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
              </li>
              <!-- Menu Footer-->
              <!-- <li class="user-footer"> -->
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
               <li class="user-footer">
    <div class="text-center">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
            Sign out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</li>

            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include("partials.admin.left_side_menu")

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Asis Real Estate Limited</a>.</strong> All rights
    reserved.
  </footer>

  
  @include("partials.admin.right_side_menu")
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/js/app.v2.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('assets/admin/plugins/iCheck/icheck.min.js')}}"></script>
<!-- blockUI -->
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
 <!-- eModal -->
<script src="{{asset('assets/admin/js/eModal.min.js')}}"></script>
<!-- utility -->
<script src="{{asset('assets/admin/js/utility.js')}}"></script>

@yield("page:scripts")

</body>
</html>