<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('ruang-admin/img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Blank Page</title>
  <link rel="stylesheet" href="{{asset('ruang-admin/vendor/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('ruang-admin/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('ruang-admin/css/ruang-admin.min.css')}}">
</head>
<body id="page-top">
  <div id="wrapper">
          
   <!-- sidebar -->
   @include('partials.sidebar')
   <!-- sidebar -->

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
   <!-- Navbar -->
   @include('partials.nav')
   <!-- Navbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

          <div class="text-center">
            <img src="{{asset('ruang-admin/img/think.svg')}}" style="max-height: 90px">
            <h4 class="pt-3">save your <b>imagination</b> here!</h4>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('ruang-admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('ruang-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ruang-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('ruang-admin/js/ruang-admin.min.js')}}"></script>

</body>

</html>