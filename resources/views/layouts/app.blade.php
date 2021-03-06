<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PCDonline </title>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .dropbtn {
            background-color: #04aa6d;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #3e8e41;
        }

        #myInput {
            box-sizing: border-box;
            background-image: url("searchicon.png");
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 20px;
            border: 3px solid #e7b200;
            /* border-bottom: 1px solid #e7b200; */
        }

        #myInput:focus {
            outline: none;
            /* border-radius: 30px; */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none !important;
            position: absolute !important;
            background-color: #f6f6f6 !important;
            min-width: 230px !important;
            overflow: auto !important;
            border: 1px solid #ddd !important;
            z-index: 1 !important;
            top: 60px;
            max-height: 300px;
            min-height: 0px;
        }

        .dropdown-content a {
            color: black !important;
            padding: 12px 16px !important;
            text-decoration: none !important;
            display: block;
            /* height: 50px; */
            line-height: 13px;
            /* margin-bottom: 13px; */
            /* text-transform: capitalize !important; */
        }

        .dropdown a:hover {
            background-color: #ddd !important;
        }

        .show {
            display: block;
        }

        @media screen and (max-width: 767px) {
            .rs-categories {
                width: 100%;
                height: auto;
                background-color: white;
            }
        }

        @media screen and (max-width: 950px) {

            .main-menu li {
                text-align: -moz-center;
                text-align: -webkit-center;

            }

            .main-menu li:hover .sub-menu {

                text-align: -webkit-center;
                text-align: -moz-center;
            }
        }

    </style>


    <!-- Additional CSS Files -->

    <link rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">

    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}"
        type="text/css" rel="stylesheet">
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
                    <h3 style="color: white; margin: 37px 10px;"><b>PCDonline</b></h3>
                </a>
            </div>
            <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
            <nav id="menu" class="main-nav" role="navigation">
                <ul class="main-menu">



                    <li class="has-submenu"><a href="#section4" style="text-decoration:none">Courses</a>
                        <ul class="sub-menu">
                            <li class="has-submenu">
                                <div class="row" onclick="redirectTo('business')"><a href="{{ route('Business') }}"
                                        target="_blank" style="text-decoration:none">Business & Management <i
                                            class='fa fa-angle-right fa-fw'></i></a> </div>



                            </li>
                            <li class="has-submenu" onclick="redirectTo('computerProgramming')">
                                <div class="row"><a href="{{ route('computerProgramming') }}" target="_blank"
                                        style="text-decoration:none">Coding & Computing <i
                                            class='fa fa-angle-right fa-fw'></i></a></div>


                            </li>
                            <li class="has-submenu" onclick="redirectTo('applied_science')">
                                <div class="row"><a href="{{ route('applied_science') }}" target="_blank"
                                        style="text-decoration:none">Applied Sci-Tech<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>

                            </li>
                            <li class="has-submenu " onclick="redirectTo('language')">
                                <div class="row"><a href="{{ route('language') }}" target="_blank"
                                        style="text-decoration:none">Languages & Culture<i
                                            class='fa fa-angle-right fa-fw'></i></a></div>

                            </li>
                        </ul>
                    </li>
                    <li class="input search-bar">

                        <input type="text" onclick="myFunction()" placeholder="Find Your Courses" id="myInput"
                            onkeyup="filterFunction()">
                        <div id="myDropdown" class="dropdown-content">

                            <a href="#about" onclick="redirectTo('accounting1')">Accounting and
                                Finance For
                                Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('accounting2')">Accounting and Finance
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('digital')">Digital Enterprise and Business Support
                                For Beginners/Intermediate Learners
                            </a>
                            <a href="#about" onclick="redirectTo('digital2')">Digital Enterprise and Business Support
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('machineLearning')">Machine Learning with Python
                                For Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('machineLearning2')">Machine Learning with Python
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('dotnet1')">.NET PROGRAMMING
                                For Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('dotnet2')">.NET PROGRAMMING
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('blockchain')">Blockchain for Everyone
                                For Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('blockchain2')">Blockchain for Everyone
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('applied_science1')">Scientific Data Handling and
                                Programming
                                For Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('applied_science2')">Scientific Data Handling and
                                Programming
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('businessEnglish')">Business English
                                For Beginners/Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('businessEnglish2')">Business English
                                For Advanced Learners</a>
                            <a href="#about" onclick="redirectTo('generalenglish1')">General English
                                For Beginners</a>
                            <a href="#about" onclick="redirectTo('generalenglish2')">General English
                                For Intermediate Learners</a>
                            <a href="#about" onclick="redirectTo('generalenglish3')">General English
                                For Advanced Learners</a>

                        </div>



                    </li>

                    @guest
                        @if (Route::has('login'))
                            <li class="pp" onclick="redirectTo('login')">
                                <a href="{{ route('login') }}" target="_blank"
                                    style="text-decoration:none">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="pp" onclick="redirectTo('register')">
                                <a href="{{ route('register') }}" target="_blank"
                                    style="text-decoration:none">{{ __('Sign Up') }}</a>
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
                    <li onclick="redirectTo('cart')" class="pp"><a href="/cart" target="_blank"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </header>
        <!-- header theme -->


        <main class="py-4">
            @yield('content')
        </main>

        <footer id="myFooter" style="padding-top: 30px">
            <div class="container" style="background-color: #0c1228">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a class="logo" href="/"><img src="{{ asset('assets/images/newlogo.png') }}" alt=""></a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>Categories</h5>
                        <ul style="color: black">
                            <li><a href="">Business & Management</a></li>
                            <li><a href="">Coding & Computing</a></li>
                            <li><a href="">Applied Sci-Tech</a></li>
                            <li><a href="">Languages & Culture</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>Contact us</h5>
                        <ul style="font-size:12px">
                            <li>PCDonline Department</li>
                            <li>Prudence College Dublin</li>
                            <li>C3, ACE Enterprise Park</li>
                            <li>Bawnogue Road </li>
                            <li>Dublin 22, D22 KW40</li>
                            <li>IRELAND.</li>
                            <li>Email: info@pcdonline.ie </li>
                            <li>Phone: +353 (0)1 254 8998</li>
                            <li>Mobile/WhatsApp: +353 87 466 9418</li>
                            <li>Skype: Prudence College</li>
                        </ul>
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="followbtn followbtnprop">Follow us</div>
                        <div class="social-networks">
                            <a href="https://twitter.com/PCDonline1" class="twitter" target="_blank"><i
                                    class=" fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/PCDonline1" class="facebook" target="_blank"><i
                                    class=" fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/pcdonline/" class="google" target="_blank"><i
                                    class=" fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/pcdonline1/" class="google" target="_blank"><i
                                    class=" fa fa-instagram"></i></a>
                        </div>
                        {{-- <button type="button" class="btn btn-default">Follow us</button> --}}
                    </div>

                </div>
            </div>
            <div class="footer-copyright">
                <p>??Prudence College Dubline </p>
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
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('assets/js/tabs.js') }}"></script>
        <script src="{{ asset('assets/js/video.js') }}"></script>
        <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
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
        <script>
            $(document).ready(function() {
                $('.dropdown-submenu a.test').on("click", function(e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });

        </script>
        {{-- <script>
            //according to loftblog tut
            $('.nav li:first').addClass('active');

            var showSection = function showSection(section, isAnimate) {
                var
                    direction = section.replace(/#/, ''),
                    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                    reqSectionPos = reqSection.offset().top - 0;

                if (isAnimate) {
                    $('body, html').animate({
                            scrollTop: reqSectionPos
                        },
                        800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }

            };

            var checkSection = function checkSection() {
                $('.section').each(function() {
                    var
                        $this = $(this),
                        topEdge = $this.offset().top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var
                            currentId = $this.data('section'),
                            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                        reqLink.closest('li').addClass('active').
                        siblings().removeClass('active');
                    }
                });
            };

            $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
                if ($(e.target).hasClass('external')) {
                    return;
                }
                e.preventDefault();
                $('#menu').removeClass('active');
                showSection($(this).attr('href'), true);
            });

            $(window).scroll(function() {
                checkSection();
            });

        </script> --}}
        <script>
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            function filterFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                console.log(input.value)
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                console.log(a)
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    console.log(txtValue)
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                        console.log(a[i]);
                    } else {
                        a[i].style.display = "none";
                        console.log("aaaaaaaaaaaaaaaaaa", a[i]);
                    }
                }
            }

        </script>
        <script>
            function redirectTo(routename) {
                window.open = `/${routename}`
            }

        </script>

    </body>

</html>
