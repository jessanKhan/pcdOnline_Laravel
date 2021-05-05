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
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css') }}"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets / css / magnific - popup . css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">




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
            <div class="logo row">
                <a href="/"><img src="{{ asset('assets/images/newlogo.png') }}" alt=""></a>
                <a href="/">
                    <h6 style="color: white; margin: 35px 10px;">Learn any where <br />Brighter Future
                    </h6>
                </a>
            </div>
            <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
            <nav id="menu" class="main-nav" role="navigation">
                <ul class="main-menu">



                    <li class="has-submenu"><a href="#section4">Courses</a>
                        <ul class="sub-menu">
                            <li class="has-submenu">
                                <div class="row"><a href="{{ route('Business') }}">Business & Management <i
                                            class='fa fa-angle-right fa-fw'></i></a> </div>


                                {{-- <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="#">Accounting and
                                                Finance</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="#">Digital Enterprise and
                                                Business Support</a></div>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="{{ route('computerProgramming') }}">Coding & Computing <i
                                            class='fa fa-angle-right fa-fw'></i></a></div>

                                {{-- <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="#">Machine Learning
                                                with
                                                Python
                                            </a></div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="#">.Net
                                                Programming
                                                for
                                                Everyone</a></div>
                                    </li>
                                    <li>
                                        <div class="row"><a href="#">Scientific Data
                                                Handling and
                                                Programming</a></div>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="{{ route('applied_science') }}">Applied Sci-Tech<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>
                                {{-- <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="#">Blockchain for
                                                Everyone</a>
                                        </div>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="has-submenu">
                                <div class="row"><a href="{{ route('language') }}">Language & Culture<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>
                                {{-- <ul class="sub-menu">
                                    <li>
                                        <div class="row"><a href="#">General English</a></div>
                                    </li>
                                    <li>
                                        <div class="row">
                                        <a href=" #">Business
                                                English</a>
                                        </div>
                                    </li>
                                </ul> --}}
                            </li>
                        </ul>
                    </li>
                    <li class="input">

                        <input type="text" placeholder="Find Your Courses">

                    </li>
                    {{-- <li class="pp"><a href="#section5">About Us</a></li> --}}
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
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
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
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
                    <li class="pp"><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </header>
        <!-- header theme -->


        <main class="py-4">
            @yield('content')
        </main>
        </div>
        <footer id="myFooter" style="padding-top: 30px">
            <div class="container" style="background-color: #0c1228">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="logo" href="/"><img src="{{ asset('assets/images/unnamed.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-sm-3">
                        <h5>Categories</h5>
                        <ul style="color: black">
                            <li><a href="">Business & Management</a></li>
                            <li><a href="">Coding & Computing</a></li>
                            <li><a href="">Applied Sci-Tech</a></li>
                            <li><a href="">Languages & Culture</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Contact us</h5>
                        <p style="color: white">Prudence College Dublin
                            C3, ACE Enterprise Park
                            Bawnogue Road
                            Dublin 22, D22 KW40
                            IRELAND</p>
                        <p style="color: white">Ph: +353 (0)1 254 8998
                            Email: info@prudencecollege.ie
                            Mobile/WhatsApp: +353 87 466 9418
                            Skype: Prudence College</p>
                    </div>
                    <!--
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="https://demo.tutorialzine.com/2016/10/freebie-5-fantastic-bootstrap-footers/Footer-with-button-logo.html#">FAQ</a></li>
                        <li><a href="https://demo.tutorialzine.com/2016/10/freebie-5-fantastic-bootstrap-footers/Footer-with-button-logo.html#">Help desk</a></li>
                        <li><a href="https://demo.tutorialzine.com/2016/10/freebie-5-fantastic-bootstrap-footers/Footer-with-button-logo.html#">Forums</a></li>
                    </ul>
                </div>
                -->
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="https://twitter.com/prudencecollege?lang=en" class="twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/PrudenceCollegeDublin" class="facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/prudencecollege/" class="google"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="https://www.linkedin.com/company/prudencecollege/" class="google"><i
                                    class="fa fa-instagram"></i></a>
                        </div>
                        <button type="button" class="btn btn-default">Follow us</button>
                    </div>

                </div>
            </div>
            <div class="footer-copyright">
                <p>©Prudence College Dubline </p>
            </div>
        </footer>

        <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js') }}"></script>
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js') }}"></script>
        <script
            src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js') }}">
        </script>
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker').datetimepicker();
            });

        </script>
        {{-- for top course need to optimize --}}
        <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/js/rsmenu-main.js') }}"></script>
        <!-- op nav js -->
        <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Slick js -->
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <!-- video js -->
        <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>
