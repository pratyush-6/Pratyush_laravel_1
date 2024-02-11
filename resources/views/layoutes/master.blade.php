<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>W3care Technology Pvt. Ltd.</title>
    <link href="assets/img/pratyush.png" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

         <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
       
       {{-- sweet alert --}}
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery UI 1.11.4 -->
       <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
         {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('stickey-logo-registered.png')}}" alt="AdminLTELogo" height="180"
                width="180">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/')}}" class="nav-link">Website</a>
                </li>
                <li>
                <div class="clock-container">
        <div class="time-container">

            <span class="hour" id="hour"></span>
            <span class="colon">:</span>
            <span class="minute" id="minute"></span>
            <span class="colon">:</span>
            <span class="second" id="second"></span>
        </div>
    </div>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('stickey-logo-registered.png')}}" alt="w3care logo" class=""
                    style="    height: 65px;
                                width: 97px;
                                background: #fff;
                                opacity: 14.8;
                                border-radius: 20px;">&nbsp;
                <span class="brand-text font-weight-light">w3-Care</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('testimonials-1.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Pratyush</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fa fa-gitlab" style="font-size:20px;color:rgb(65, 185, 155)"> &nbsp;</i>
                                <p>
                                    Site-Setting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('bannerlist')}}" class="nav-link">
                                        <i class="fa fa-cloud-download">&nbsp;</i>
                                        <p>Banner-management</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('addsocial')}}" class="nav-link">
                                        <i class="fa fa-user-circle-o"> &nbsp;</i>
                                        <p>Social Media</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('listmem')}}" class="nav-link">
                                <i class="fa fa-users">&nbsp;</i>
                                <p>
                                    Member
                             
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('courselist')}}" class="nav-link" >
                                <i class="fa fa-folder-open">&nbsp;</i>
                                <p>
                                    Course Management                               
                                </p>
                            </a>
                        </li>
                      
                         <li class="nav-item">
                            <a href="{{route('aboutme')}}" class="nav-link" >
                                <i class="fa fa-street-view">&nbsp;</i>
                                <p>
                                    About-Me Management                              
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                         
                            <a class="dropdown-item" href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                      <i class="fa fa-power-off"> _</i>    
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <main class="py-4">
                @yield('content')
                            <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

<style>
:root {
  --color-purple-1: rgba(179, 0, 255, 1) 0%;
  --color-purple-2: rgba(149, 0, 255, 0.8968837535014006);

  --color-pink-1: #dc00fe;

  --color-blue-1: #00c0f9;
  --color-blue-2: #5319fb;
  --color-blue-3: #1b02a3;

  --color-red-1: rgba(255, 29, 0, 0.8968837535014006) 0%;

  --color-orange-1: rgba(255, 165, 0, 0.8940826330532213) 100%;
}

/* ====================================================================== */

*,
*::after,
*::before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}



.clock-container {
  margin-top:23px;
  margin-left:191px;
  position: relative;
  border-radius: 15px;
  background-color: #fff;

  width: 159%;
  max-width: 343px;
  max-height: 0px;
  aspect-ratio: 4/1;

  display: grid;
  align-items: center;

  grid-template-areas:
  /* . ---> empty space */
  /* time ---> time container */
    ". . ."
    ". time ."
    ". . .";
  grid-template-rows: 10% 80% 10%;
  grid-template-columns: 5% 1fr 5%;
}

.clock-container::before {
  content: "";
  position: absolute;
  z-index: -100;

  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  transform: translateY(-10%);

  background-color: var(--color-purple-2);
  filter: blur(15px);
}

.clock-container::after {
  content: "";
  position: absolute;
  z-index: -100;

  top: 0;
  left: 0;
  filter: blur(15px);
  width: 100%;
  height: 100%;
  transform: translateY(10%);

  background-color: var(--color-blue-2);
}

.time-container {
  grid-area: time;

  position: relative;
}

.time-container,
.hour,
.minute,
.second,
.colon {
  display: flex;
  justify-content: center;
  align-items: center;
}

.hour,
.minute,
.second,
.colon {
  color: #f30202;
  font-size: 2.5em;
  font-family: math;
  padding: 0 5px;
  font-weight: bold;
}

.hour {
  background: -webkit-linear-gradient(
    90deg,
    var(--color-red-1),
    var(--color-orange-1)
  );
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.minute {
  background: -webkit-linear-gradient(
    90deg,
    var(--color-blue-1),
    var(--color-orange-1)
  );
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.second {
  background: -webkit-linear-gradient(
    90deg,
    var(--color-pink-1),
    var(--color-blue-1)
  );
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@media screen and (max-width: 620px) {
  .clock-container {
    width: 65%;
    aspect-ratio: 4/1;
  }

  .hour,
  .minute,
  .second,
  .colon {
    font-size: 3em;
  }
}

@media screen and (max-width: 480px) {
  .clock-container {
    width: 65%;
    aspect-ratio: 4/1;
  }

  .hour,
  .minute,
  .second,
  .colon {
    font-size: 2.25em;
  }
}

@media screen and (max-width: 360px) {
  .clock-container {
    width: 70%;
    aspect-ratio: 4/1;
  }

  .hour,
  .minute,
  .second,
  .colon {
    font-size: 1.75em;
  }
}

</style>

    

<script>
const hour = document.getElementById("hour");
const minute = document.getElementById("minute");
const second = document.getElementById("second");

function getTime() {
  let date = new Date();

  h = date.getHours();
  m = date.getMinutes();
  s = date.getSeconds();

  timeChecker("hour", h);
  timeChecker("minute", m);
  timeChecker("second", s);

  hour.innerText = h < 10 ? "0" + h : h;
  minute.innerText = m < 10 ? "0" + m : m;
  second.innerText = s < 10 ? "0" + s : s;

  // Executes getTime again after 1 second
  setTimeout(getTime, 1000);
}

// Invoking getTime() to get the time when the page loads
getTime();

function timeChecker(t, n) {
  if ((t = "second")) {
    // console.log("hello");
    if (n >= 60) {
      s = 0;
      m++;
    }
  } else if ((t = "minute")) {
    if (n >= 60) {
      m = 0;
      h++;
    }
  } else if ((t = "hour")) {
    if ((n = 24)) {
      (h = 0), (m = 0), (s = 0);
    }
  }
}

</script>
                
            </main>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2010-2023 <a href="https://w3care.com">W3-care</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


 
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
 
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
