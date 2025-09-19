<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      {{--
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> --}}
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    {{-- <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li> --}}

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="{{route('users.edit',session()->get('user')->id)}}" class="dropdown-item">
          <i class="fas fa-user mr-2"></i> {{__('site.profile')}}
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{route('logout')}}" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> {{__('site.logout')}}
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a href="{{route('home')}}" class="nav-link" role="button" aria-haspopup="true" aria-expanded="false">{{__("site.Home")}}</a>
    </li>
    
    {{-- change language --}}
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-globe"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="{{route("profile.change.lang", "ar" )}}" class="dropdown-item {{$locale == 'ar' ? 'active' : ''}}">
          <i class="fas fa-language mr-2"></i> {{__('site.arabic')}}
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{route("profile.change.lang", "en" )}}" class="dropdown-item {{$locale == 'en' ? 'active' : ''}}">
          <i class="fas fa-language mr-2"></i> {{__('site.english')}}
        </a>

      </div>
    </li>

    
  </ul>
</nav>