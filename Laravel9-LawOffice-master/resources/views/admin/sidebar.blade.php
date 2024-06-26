<div class="container-scroller">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/admin"><img src="{{asset('assets')}}/admin/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="/admin"><img src="{{asset('assets')}}/admin/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="{{asset('assets')}}/admin/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
            <span>Gold Member</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <a href="{{route('admin.setting')}}" class="preview-subject ellipsis mb-1 text-small">Account settings</a>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Categories</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Appointment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/appointment/New">New Appointment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/appointment/Accepted">Accepted Appointment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/appointment/Cancelled">Cancelled Appointment</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/appointment/Completed">Completed Appointment</a></li>
              </ul>
            </div>
          </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('admin.category.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Category</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('admin.services.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Services</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/admin/comment">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Comments</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('admin.faq.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">FAQ</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('admin.message.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">Messages</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('admin.user.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('admin.setting')}}">
        <span class="menu-icon">
          <i class="mdi mdi-settings"></i>
        </span>
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav>
