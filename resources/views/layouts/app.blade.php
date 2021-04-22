<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900') }}"
        rel="stylesheet">

    <title>PCD-Online </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('../assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/demo3.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/lightbox.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}"
        type="text/css" rel="stylesheet">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="{{ asset('../assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('../assets/css/lightbox.css') }}">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">

<link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script> -->

</head>

<body>

    <body class="antialiased">

        <!-- Theme section -->
        <header class="main-header clearfix" role="header">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/images/unnamed.jpg') }}" alt=""></a>
            </div>
            <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
            <nav id="menu" class="main-nav" role="navigation">
                <ul class="main-menu">



                    <li class="has-submenu"><a href="#section4">Courses</a>
                        <ul class="sub-menu">
                            <li class="has-submenu">
                                <div class="row"><a href="#section2">Business & Management <i
                                            class='fa fa-angle-right fa-fw'></i></a> </div>


                                <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="{{ route('accounting') }}">Accounting and
                                                Finance</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="{{ route('digital') }}">Digital Enterprise and
                                                Business Support</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="#section3">Coding & Computing <i
                                            class='fa fa-angle-right fa-fw'></i></a></div>

                                <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="{{ route('machineLearning') }}">Machine Learning
                                                with
                                                Python
                                            </a></div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="{{ route('computerProgramming') }}">.Net
                                                Programming
                                                for
                                                Everyone</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="#section3">Applied Sci-Tech<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="{{ route('blockchain') }}">Blockchain for
                                                Everyone</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="{{ route('applied_science') }}">Scientific Data
                                                Handling and
                                                Programming</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="#section3">Language & Culture<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="{{ route('language') }}">General English</a></div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="{{ route('businessEnglish') }}">Business
                                                English</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="input">

                        <input type="text" placeholder="Find Your Courses">

                    </li>
                    <li class="pp"><a href="#section5">About Us</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="has-submenu">
                            <a id="navbarDropdown" href="#">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="sub-menu">
                                <li class="has-submenu">
                                    <div class="row">
                                        <a href="{{ route('home') }}" onclick="window.location='/home'">
                                            {{ __('Profile') }}
                                        </a>

                                    </div>

                                </li>
                                <li class="has-submenu">
                                    <div class="row">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </li>



                            </ul>
                        </li>
                    @endguest
                    <li class="pp"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </header>
        <!-- header theme -->


        <main class="py-4">
            @yield('content')
        </main>
        </div>
        <footer>
            <div class="footer">

                <p>Prudence College Dublin</p>

            </div>
        </footer>
    </body>

</html>
