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
  <link rel="stylesheet" href="css/account.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/icons8.png" />
  <!-- CSS E-->
  <!-- end CSS-->
  <!-- Font -->
  <style>@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap');</style>
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
      <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
        <div class="card_25 p-4"> <div class=" image d-flex flex-column justify-content-center align-items-center"> 
          <button class="btn btn-secondary">
             <img src="images/acn/account.jfif" height="100" width="100" />
            </button> <span class="name mt-3">User Admin</span> 
            <span class="id">useradmin@mail.com</span> 
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="id">235647</span> 
              <span><i class="fa fa-copy"></i></span>
            </div> 
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1 <span class="follow">Followers</span>
            </span> </div> <div class=" d-flex mt-2"> 
              <button class="btn1 btn-dark">Edit Profile</button>
             </div> <div class="text mt-3"> <span>UKK<br>
              <br> Artist/ J</span> 
            </div> <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
               <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i>
              </span> 
              <span><i class="fa fa-instagram"></i></span> 
              <span><i class="fa fa-linkedin"></i></span>
             </div> <div class=" px-2 rounded mt-4 date ">
               <span class="join">2024</span> 
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

