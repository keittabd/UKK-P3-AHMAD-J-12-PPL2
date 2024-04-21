<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JLLY-Registers</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/logout.css">
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
  <div class="container">
    <form class="form" action="/Login">
      @csrf
        <p class="title">Login Form</p>
        <input placeholder="Username" class="username input" type="text">
        <input placeholder="Password" class="password input" type="password">
        <button class="btn" type="submit">Login</button>
        <br></br>
            <div class="acc-text"><text>New here ?<span style="color : #0000ff; cursor : pointer;"><a class="nav-link" href="/Register">Create Account</a></span>
            </text>
        </div>
            <br>
            <div class="acc-text">
                <span style="color : #0000ff; cursor : pointer;"><a class="nav-link" href="/register">Forget Password</a></span>
              </div>
            </br>
    </form>
</div>

</body>

</html>

