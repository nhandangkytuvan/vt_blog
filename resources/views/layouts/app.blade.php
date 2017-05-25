<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @yield('css')
    <link href="{{ asset('public/css/overlay.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/codepen.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @yield('js')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-top">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-top">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-3" id="menuTerm">
                @yield('menu')
            </div>
            <div class="col-md-7">
                @yield('content')
            </div>
            <div class="col-md-2" id="realTime">
                @yield('realtime')
            </div>
        </div>
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <ul class="nav navbar-nav pull-left">
                    <li><a href="javascript:;" onclick="openNav()">MenuLeft</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li><a href="javascript:;" onclick="closeNav()">MenuRight</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- overlaymenu xs -->
    <!-- The overlay -->
    <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="btn btn-danger btn-sm closebtn" onclick="closeNav()"><i class="glyphicon glyphicon-menu-left"></i></a>
        <!-- Overlay content -->
        <div class="overlay-content">
            
        </div>
    </div>
    @yield('modal')
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.popupoverlay.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('public/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/js/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('public/js/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('public/js/overlay.js') }}"></script>
    <script src="{{ asset('public/js/myapp.js') }}"></script>
</body>
</html>
