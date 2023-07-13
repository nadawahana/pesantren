<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pesantren Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/skydash/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/css/vertical-layout-light/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/css/social.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/css/button.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/css/spiner.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/skydash/images/logo.jpg')}}" />
  <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css">

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-2" href="/userhome"><img src="{{asset('assets/skydash/images/logo1.png')}}" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/skydash/images/logo.jpg')}}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">

        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('assets/skydash/images/faces/profile.png')}}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="/logout" class="text-primary">
                <i class="ti-power-off text-primary">Logout</i>
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">

        <div class="tab-content" id="setting-content">

          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="/userhome">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li> -->

          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Informasi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/gelombang1">Gelombang 1</a></li>
                <li class="nav-item"><a class="nav-link" href="/gelombang2">Gelombang 2</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Pendaftaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/daftar">Form Daftar</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/daftar" aria-expanded="false" aria-controls="icons">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Informasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data" aria-expanded="false" aria-controls="icons">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Data Diri</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tampilOrtu" aria-expanded="false" aria-controls="icons">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Data Orang Tua</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tampilPersyaratan" aria-expanded="false" aria-controls="icons">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Data Persyaratan</span>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/datapembayaran" aria-expanded="false" aria-controls="icons">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Pembayaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/datanilai" aria-expanded="false" aria-controls="icons">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Data Nilai</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/grafik" aria-expanded="false" aria-controls="icons">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Data Grafik</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        @yield('content')

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('assets/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('assets/skydash/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/skydash/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/skydash/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/skydash/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/skydash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/skydash/js/template.js')}}"></script>
  <script src="{{asset('assets/skydash/js/settings.js')}}"></script>
  <script src="{{asset('assets/skydash/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('assets/skydash/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/skydash/js/file-upload.js')}}"></script>
  <script src="{{asset('assets/skydash/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="https://code.highcharts.com/highcharts.js"></script>

</body>

</html>