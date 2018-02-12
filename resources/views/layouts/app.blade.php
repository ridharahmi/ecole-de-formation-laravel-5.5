<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecole Formation</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAw1Wg-f_QsyBl2SexlIGaLhwhIlMM8X9s&callback=initMap"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       Ecole Formation
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('formation') }}">Formation</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <!--
                            <li><a href="{{ url('register') }}">Register</a></li>
                          -->
                        @else
                        <li><a href="{{ url('listformation') }}">Liste Formations</a></li>
                        <li><a href="{{ url('listcontact') }}">Liste Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                  <li><a href="{{ url('/home') }}">Admin</a></li>
                                   <li role="separator" class="divider"></li>
                                  <li><a href="">{{ Auth::user()->email }}</a></li>
                                   <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-lg-4 text-center">
                  <img src="{{ asset('images/logo.png')}}">
                  <p></p>
              </div>
              <div class="col-xs-12 col-lg-4">
                  <ul class="social">
                      <li><a href="" target="_block"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="" target="_block"><i class="fa fa-google"></i></a></li>
                      <li><a href="" target="_block"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="" target="_block"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
              </div>
              <div class="col-xs-12 col-lg-4">
                   <ul> 
                      <li><i class="fa fa-map-marker fa-fw"></i> manzel tmime, nabeul tunisie</li>
                      <li><i class="fa fa-phone fa-fw"></i> +216 00000000</li>
                      <li><i class="fa fa-mobile fa-fw"></i> +216 00000000</li>
                      <li><i class="fa fa-envelope fa-fw"></i> contact@gmail.com</li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
