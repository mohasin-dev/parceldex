<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link setNavBarPushMenu" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
    </li>
  </ul>


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
    {{--<li class="nav-item dropdown">--}}
      {{--<a class="nav-link dropdown-expanded" href="#" aria-expanded="false">--}}
        {{--<i class="far fa-bell"></i>--}}
        {{--<span class="badge badge-warning navbar-badge">15</span>--}}
      {{--</a>--}}
      {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">--}}
        {{--<span class="dropdown-item dropdown-header">15 Notifications</span>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-envelope mr-2"></i> 4 new messages--}}
          {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-users mr-2"></i> 8 friend requests--}}
          {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-file mr-2"></i> 3 new reports--}}
          {{--<span class="float-right text-muted text-sm">2 days</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
      {{--</div>--}}
    {{--</li>--}}

    {{--<merchant-registration :userid="{{ auth()->guard('admin')->user()->id }}" :unreads="{{ auth()->guard('admin')->user()->unreadNotifications }}"></merchant-registration>--}}
    {{-- <merchant-registration
            :userid="{{ auth()->guard('admin')->user()->id }}"
            :unreads="{{ auth()->guard('admin')->user()->unreadNotifications }}"
            :readunreads="{{ auth()->guard('admin')->user()->notifications }}"></merchant-registration> --}}

    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('admin.logout') }}" class="nav-link">
        <i class="fas fa-power-off text-danger"></i>
        Logout
      </a>
    </li>
  </ul>

<!-- Right navbar links -->
  {{--<ul class="navbar-nav ml-auto">--}}
    {{--<!-- Messages Dropdown Menu -->--}}
    {{--<li class="nav-item dropdown">--}}
      {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--<i class="far fa-comments"></i>--}}
        {{--<span class="badge badge-danger navbar-badge">3</span>--}}
      {{--</a>--}}
      {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<!-- Message Start -->--}}
          {{--<div class="media">--}}
            {{--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
            {{--<div class="media-body">--}}
              {{--<h3 class="dropdown-item-title">--}}
                {{--Brad Diesel--}}
                {{--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
              {{--</h3>--}}
              {{--<p class="text-sm">Call me whenever you can...</p>--}}
              {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<!-- Message Start -->--}}
          {{--<div class="media">--}}
            {{--<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
            {{--<div class="media-body">--}}
              {{--<h3 class="dropdown-item-title">--}}
                {{--John Pierce--}}
                {{--<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
              {{--</h3>--}}
              {{--<p class="text-sm">I got your message bro</p>--}}
              {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<!-- Message Start -->--}}
          {{--<div class="media">--}}
            {{--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
            {{--<div class="media-body">--}}
              {{--<h3 class="dropdown-item-title">--}}
                {{--Nora Silvester--}}
                {{--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
              {{--</h3>--}}
              {{--<p class="text-sm">The subject goes here</p>--}}
              {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
      {{--</div>--}}
    {{--</li>--}}
    {{--<!-- Notifications Dropdown Menu -->--}}
    {{--<li class="nav-item dropdown">--}}
      {{--<a class="nav-link dropdown-expanded" data-toggle="dropdown" href="#">--}}
        {{--<i class="far fa-bell"></i>--}}
        {{--<span class="badge badge-warning navbar-badge">15</span>--}}
      {{--</a>--}}
      {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
        {{--<span class="dropdown-header">15 Notifications</span>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-envelope mr-2"></i> 4 new messages--}}
          {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-users mr-2"></i> 8 friend requests--}}
          {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
          {{--<i class="fas fa-file mr-2"></i> 3 new reports--}}
          {{--<span class="float-right text-muted text-sm">2 days</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
      {{--</div>--}}
    {{--</li>--}}
    {{--<li class="nav-item">--}}
      {{--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i--}}
                {{--class="fas fa-th-large"></i></a>--}}
    {{--</li>--}}
  {{--</ul>--}}

</nav>
