<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JLLY</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="css/card-css/card.css">
  <link rel="stylesheet" href="css/card-css/halaman-utama/kotak.css">
  <link rel="stylesheet" href="css/search.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/icons8.png" />
  <!-- CSS E-->
  <!-- end CSS-->
  <!-- Font -->
  <style>@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap');</style>
  <style>@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Luxurious+Roman&display=swap');</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.sidebar')
      <!-- partial -->
      <section class="py-5">
        <div class="container">
          <div class="row justify-content-center text-center mb-3 mb-md-5">
            <div class="col-lg-8 col-xxl-7">
              <span class="text-muted">Showcase</span>
              <h2 class="display-5 fw-bold mb-3">Our Gallery</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta harum ipsum venenatis metus sem veniam eveniet aperiam suscipit.</p>
            </div>
          </div>
          <div class="carousel slide container pointer-event" data-bs-ride="carousel" id="galleryCarouse1">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row gy-4">
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row gy-4">
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                  <div class="col-md-3"><img alt="" class="img-fluid rounded-1" src="https://freefrontend.dev/assets/square.png"></div>
                </div>
              </div>
            </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#galleryCarouse1" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#galleryCarouse1" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
          </div>
        </div>
      </section>
      <!-- main-panel ends -->
      @include('layouts.footer')
      <!-- halaman login -->
    </div>   
    @yield('content')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <!-- search -->
  <!-- search-->
</body>

</html>

