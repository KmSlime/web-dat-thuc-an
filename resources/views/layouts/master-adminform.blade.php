<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->
  <link href="{{asset('fonts/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('css/admincss/adminlte.min.css') }}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-item">
              <a href="{{ route('customer.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Qu???n l?? kh??ch h??ng
                </p>
              </a>
            </li>
               
            <li class="nav-item">
              <a href="{{ route('staff.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Qu???n l?? th??nh vi??n
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Qu???n l?? t??i kho???n
                </p>
              </a>  
            </li>
         
            <li class="nav-item">
              <a href="{{ route('drinkcategory.index') }}" class="nav-link">
                <i class="nav-icon fas fa-object-group"></i>
                <p>
                  Qu???n l??  lo???i th???c u???ng
                </p>
              </a>
            </li>       
            <li class="nav-item">
              <a href="{{ route('drink.index') }}" class="nav-link">
                <i class="nav-icon fas fa-glass-martini-alt"></i>
                <p>
                  Qu???n l?? th???c u???ng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('foodcategory.index') }}" class="nav-link">
                <i class="nav-icon fas fa-object-group"></i>
                <p>
                  Qu???n l??  lo???i th???c ??n
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('food.index') }}" class="nav-link">
                <i class="nav-icon fas fa-hamburger"></i>
                <p>
                  Qu???n l?? th???c ??n
                </p>
              </a>
             </li>
             <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                  <p>
                    Tr??? v???
                    </p>
              </a>
             </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->

    @yield('content')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('js/adminjs/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('js/adminjs/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE -->
  <script src="{{asset('js/adminjs/adminlte.js')}}"></script>
</body>

</html>