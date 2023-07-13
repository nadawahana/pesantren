<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PPDB THAWALIB TANJUNG</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/skydash/images/logo.jpg')}}" />
</head>

<body>
@if(session('message'))
  <div class="alert alert-info mt-4">
    {{ session('message') }}
  </div>
  @endif
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('assets/skydash/images/logo1.png')}}" alt="logo">
              </div>
              <h4>Halo! mari kita mulai</h4>
              <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>
              <form method="POST" action=" {{ route('pL') }} ">
                @csrf
                <form class="pt-3">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">MASUK</button>
                  </div>
                </form>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <!-- <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label> -->
                  </div>
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Belum Punya Akun? <a href="/regis" class="text-primary">Daftar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/skydash/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/skydash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/skydash/js/template.js')}}"></script>
  <script src="{{asset('assets/skydash/js/settings.js')}}"></script>
  <script src="{{asset('assets/skydash/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>