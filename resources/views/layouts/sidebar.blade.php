<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="http://127.0.0.1:8000/">
        <img src="images/to1.png" x="0px" y="0px" width="60px" height="60px" alt="Ikon">
        <span class="menu-title">Home</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/Search">
        <img src="images/kky.png" x="0px" y="0px" width="60px" height="60px" alt="Ikon">
        <span class="menu-title">Search</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <img src="images/hj.png" x="0px" y="0px" width="60px" height="60px" alt="Ikon">
        <span class="menu-title">LLYV-</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/post">Post</a></li>
          <li class="nav-item"> <a class="nav-link" href="/Account">Account</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Cloud">
        <img src="images/rl.png" x="0px" y="0px" width="60px" height="60px" alt="Ikon">
        <span class="menu-title" >Cloud</span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <img src="images/sm.png" x="0px" y="0px" width="60px" height="60px" alt="Ikon">
        <span class="menu-title">Setting</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          @guest
          <li class="nav-item"> <a class="nav-link" href="/Login">Sign In</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/Register">Sign Up</a></li>
    </li>
    @endguest
  </ul>
</nav>