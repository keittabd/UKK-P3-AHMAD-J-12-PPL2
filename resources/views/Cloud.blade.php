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
    <link rel="stylesheet" href="css/cloud.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/icons8.png" />
    <!-- CSS E-->
    <!-- end CSS-->
    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Luxurious+Roman&display=swap');
    </style>
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
            <div class="card_28">
                <div class="card-img">@if (isset($imagePath))
                  <img src="{{ asset($imagePath) }}" alt="Uploaded Image">
              @endif</div>
                <div class="card-info">
                    <p class="text-title">Kiki's</p>
                    <p class="text-body">A young witch, on her mandatory year of independent life, finds fitting into a new community difficult while she supports herself by running an air courier service.</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">477</span>
                    <div class="card-button">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="card_29">
                <div class="card-img">@if (isset($imagePath))
                  <img src="{{ asset($imagePath) }}" alt="Uploaded Image">
              @endif</div>
                <div class="card-info">
                    <p class="text-title">title </p>
                    <p class="text-body">A young witch, on her mandatory year of independent life, finds fitting into a new community difficult while she supports herself by running an air courier service.</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">49</span>
                    <div class="card-button">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="card_40">
                <div class="card-img">@if (isset($imagePath))
                  <img src="{{ asset($imagePath) }}" alt="Uploaded Image">
              @endif</div>
                <div class="card-info">
                    <p class="text-title">title </p>
                    <p class="text-body">A young witch, on her mandatory year of independent life, finds fitting into a new community difficult while she supports herself by running an air courier service.s</p>
                </div>
                <div class="card-footer">
                    <span class="text-title">4</span>
                    <div class="card-button">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
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
