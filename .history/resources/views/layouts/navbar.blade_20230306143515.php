<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <h6 class="font-weight-bolder mb-0">Laporan Data<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMasjid</h6>
        
      </nav>
      
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
        </div>
        @auth
          <li class="nav-item d-flex align-items-center" method="POST">
            <span class="d-sm-inline d-none"></span>
            <a href="/logouts" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign out</span>
            </a>
          </li>
            @else
          <li class="nav-item d-flex align-items-center" method="POST">
              <span class="d-sm-inline d-none"></span>
              <a href="/login" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign in</span>
              </a>
            </li>
          </li>
        @endauth
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
      </div>
    </div>
    
  </nav>
<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
<div class="ms-md-auto pe-md-3 d-flex align-items-center">
</div>
<ul class="navbar-nav  justify-content-end">
  <li class="nav-item d-flex align-items-center">
    <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
      <i class="fa fa-user me-sm-1"></i>
      <span class="d-sm-inline d-none">Sign In</span>
    </a>
  </li>
  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
      <div class="sidenav-toggler-inner">
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
      </div>
    </a>
  </li>
  <li class="nav-item px-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0">
      <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
    </a>
  </li>
  <li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-bell cursor-pointer"></i>
    </a>
  </li>
</ul>
</div>
</div>
</nav>