<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <div class="navbar-box">
      <h1 class="navbar-title">JLLY</h1>
      <!-- add your navbar links here -->
    </div>
    <a class="navbar-brand brand-logo mr-5" href="http://127.0.0.1:8000/"><img src="images/we.gif" class="mr-2" alt="logo"/>
    </a>
    <a class="navbar-brand brand-logo-mini" href="http://127.0.0.1:8000/"><img src="images/we.gif" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="images/de.jpeg" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <a class="dropdown-item" href="#" id="accountButton">
            <img src="images/acc.png" alt="Account">
            Account
          </a>
          <hr>
          <div class="content">
          <form action="{{ route('Logout')}}" method="POST">
            @csrf
            <button class="dropdown-item" type="submit">
                <img src="images/log.png" alt="Logout">
                Logout
            </button>
        </form> 
          </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>