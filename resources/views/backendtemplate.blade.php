<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Backend @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('icofont/icofont.min.css')}}">

  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  

  {{-- JQ --}}
 {{--  <script type="text/javascript" src="{{asset('frontend_template/vendor/jquery/jquery.min.js')}}"></script> --}}

  


  <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Gym Management System</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button">
                        <i class="icofont-search-2"></i>
                    </button>
                </li>
                <!-- User Menu-->
                <li class="dropdown">
                    <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                        <i class="icofont-user-alt-3"></i>
                </a>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="page-user.html">
                            <i class="icofont-ui-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icofont-logout"></i>
                            Logout

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                  </ul>
                </li>
            </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar w-25" src="#" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation">Backend Developer</p>
        </div>
      </div>
     <ul class="app-menu">

              

                 <li>
                    <a class="app-menu__item" href="{{route('category.index')}}">
                        <i class="icofont-listine-dots"></i>
                        <span class="app-menu__label">
                          &nbsp;  Categories
                        </span>
                    </a>
                </li>

                 <li>
                    <a class="app-menu__item" href="{{route('trainer.index')}}">
                        <i class="icofont-muscle"></i>
                        <span class="app-menu__label">
                           &nbsp; Trainers
                        </span>
                    </a>
                </li>

                 <li>
                    <a class="app-menu__item" href="{{route('package.index')}}">
                        <i class="icofont-money"></i>
                        <span class="app-menu__label">
                          &nbsp;  Packages
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('memberpackage.index')}}">
                        <i class="icofont-money"></i>
                        <span class="app-menu__label">
                          &nbsp;  Members
                        </span>
                    </a>
                </li>
              </ul>
    </aside>

     <main class="app-content">
      <div class="container-fluid">
    @yield('content')
    </div>
    </main>
    
  @yield('script')
  </body>

</html>


