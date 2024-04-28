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
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/card-css/gambar-card.css">
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
            <form class="form" method="POST" action="{{ route('post.move') }}" enctype="multipart/form-data">
                @csrf
                <span class="form-title">POST</span>
                <br>
                <input type="text" class="form-control" id="username" placeholder="Username">
                <br>
                <input class="form-control" id="title" placeholder="Title" name="title"></input>
                <p class="form-paragraph">
                    Upload your file
                </p>
                <label for="file-input" class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    or
                    <input type="file" accept="image/*" required="" id="file-input" name="file"></input>
                </label>
                <!-- Tombol "Post" harus berada di dalam form -->
                <button class="btn" name="submit" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                    </svg>
                    <div class="text">
                        Post
                    </div>
                </button>
            </form>
            <hr>
            <!-- card gambar -->
            <div class="card_33">
                <div class="card-img"></div>
                <div class="category"> View </div>
                <div class="heading" name="title" id="titleHeading"> KIKI'S
                    <div class="author">@<span class="name">user</span> 4 </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm">Upload</button>
                    <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

        <!-- end gambar -->
        <!-- end post -->
        <!-- main-panel ends -->
        @include('layouts.footer')
        <!-- halaman login -->
        <!-- post -->
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
    <script src="public/js/post.js"></script>
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
