  <header id="header">
    <div class="container">
      <div class="navbar-backdrop">
        <div class="navbar">
          <div class="navbar-left">
            <a class="navbar-toggle"><i class="fa fa-bars"></i></a>
            <a href="index.html" class="logo"><img src="/img/logo.png" alt="Gameforest - Game Theme HTML"></a>
            <nav class="nav">
              <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="{{route('video.index')}}">Videos</a></li>
                <li><a href="#">Articles</a></li>
              </ul>
            </nav>
          </div>
          <div class="nav navbar-right">
            @if(auth()->check())
            <ul>
              <li class="dropdown dropdown-profile">
                <a href="login.html" data-toggle="dropdown"><img src="img/user/avatar-sm.jpg" alt=""> <span>{{auth()->user()->name}}</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item active" href="#"><i class="fa fa-user"></i> Profile</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" 
                      onclick="event.preventDefault(); 
                               document.getElementById('logout-form').submit();"> 
                      <i class="fa fa-sign-out" style=""></i> Logout 
                  </a> 

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                      {{ csrf_field() }} 
                  </form> 
                </div>
              </li>
              <li class="dropdown dropdown-notification">
                <a href="register.html" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="badge badge-danger">2</span>
              </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <h5 class="dropdown-header"><i class="fa fa-bell"></i> Notifications</h5>
                  <div class="dropdown-block">
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-info"><i class="fa fa-envelope-open"></i></span> new email
                    <span class="date">just now</span>
                  </a>
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-danger"><i class="fa fa-thumbs-up"></i></span> liked your post
                    <span class="date">5 mins</span>
                  </a>
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-primary"><i class="fa fa-user-plus"></i></span> friend request
                    <span class="date">2 hours</span>
                  </a>
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-info"><i class="fa fa-envelope"></i></span> new email
                    <span class="date">3 days</span>
                  </a>
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-info"><i class="fa fa-video-camera"></i></span> sent a video
                    <span class="date">5 days</span>
                  </a>
                    <a class="dropdown-item" href="#">
                    <span class="badge badge-danger"><i class="fa fa-thumbs-up"></i></span> liked your post
                    <span class="date">8 days</span>
                  </a>
                  </div>
                </div>
              </li>
              <li><a data-toggle="search"><i class="fa fa-search"></i></a></li>
            </ul>
            @else
            <ul>
              <li class="hidden-xs-down"><a href="{{ route('login') }}">Login</a></li>
              <li class="hidden-xs-down"><a href="{{ route('register') }}">Register</a></li>
              <li><a data-toggle="search"><i class="fa fa-search"></i></a></li>
            </ul>
            @endif
          </div>
        </div>
      </div>
      <div class="navbar-search">
        <div class="container">
          <form method="post">
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-times close"></i>
          </form>
        </div>
      </div>
    </div>
  </header>