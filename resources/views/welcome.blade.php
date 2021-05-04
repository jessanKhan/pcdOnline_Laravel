<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello </title>

    <!-- Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}"
        rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>


    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900') }}"
        rel="stylesheet">

    <title>PCD-Online Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('../assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/lightbox.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">

    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}"
        type="text/css" rel="stylesheet">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>

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


</head>

<body class="antialiased">
    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @if (Route::has('register'))
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @endif
                    @endauth
                </div>
            @endif

           
        </div> -->

    <header class="main-header clearfix" role="header">
        <div class="logo row">
            <a href="/"><img src="{{ asset('assets/images/unnamed.jpg') }}" alt=""></a>
            <a href="/">
                <h6 style="color: white; margin: 35px 10px;">Learn any where <br />and be skilled</h6>
            </a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">



                <li class="has-submenu"><a href="#section4">Courses</a>
                    <ul class="sub-menu">
                        <li class="has-submenu" onclick="accounting()">
                            <div class="row"><a href="{{ route('Business') }}">Business & Management <i
                                        class='fa fa-angle-right fa-fw'></i></a> </div>


                            {{-- <ul class="sub-menu">
                                <li onclick="accounting()">
                                    <div class="row"><a href="{{ route('accounting') }}">Accounting and Finance</a>
                                    </div>
                                </li>
                                <li onclick="digital_enterprise()">
                                    <div class="row"><a href="{{ route('digital') }}">Digital Enterprise and
                                            Business Support</a></div>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="has-submenu" onclick="dotnetProgramming()">
                            <div class="row"><a href="{{ route('computerProgramming') }}">Coding & Computing <i
                                        class='fa fa-angle-right fa-fw'></i></a></div>

                            {{-- <ul class="sub-menu">
                                <li onclick="machine_learning()">
                                    <div class="row"><a href="{{ route('machineLearning') }}">Machine Learning with
                                            Python
                                        </a></div>
                                </li>
                                <li onclick="dotnetProgramming()">
                                    <div class="row"><a href="{{ route('computerProgramming') }}">.Net Programming
                                            for
                                            Everyone</a></div>
                                </li>
                                <li onclick="blockchain()">
                                    <div class="row"><a href="{{ route('blockchain') }}">Blockchain for Everyone</a>
                                    </div>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="has-submenu" onclick="applied_science()">
                            <div class="row"><a href="{{ route('applied_science') }}">Applied Sci-Tech<i
                                        class='fa fa-angle-right fa-fw'></i></a></div>
                            {{-- <ul class="sub-menu">
                                <li onclick="applied_science()">
                                    <div class="row"><a href="{{ route('applied_science') }}">Scientific Data
                                            Handling and
                                            Programming</a></div>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="has-submenu " onclick="language_course()">
                            <div class="row"><a href="{{ route('language') }}">Languages & Culture<i
                                        class='fa fa-angle-right fa-fw'></i></a></div>
                            {{-- <ul class="sub-menu">
                                <li onclick="language_course()">
                                    <div class="row"><a href="{{ route('language') }}">General English</a></div>
                                </li>
                                <li onclick="business_english()">
                                    <div class="row"><a href="{{ route('businessEnglish') }}">Business English</a>
                                    </div>
                                </li>
                            </ul> --}}
                        </li>
                    </ul>
                </li>
                <li class="input">
                    <a href="">
                        <input type="text" placeholder="Find Your Courses">
                    </a>
                </li>
                <li class="pp"><a href="#section5">About Us</a></li>
                @guest
                    @if (Route::has('login'))
                        <li class="pp" onclick="Loginpage()">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="pp" onclick="Registerpage()">
                            <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>


                        </ul>
                    </li>
                @endguest
                <li onclick="cartmenu()" class="pp"><a href="/cart"><i class="fa fa-shopping-cart"
                            aria-hidden="true"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/pcd-courses 1.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2><em>PCD</em> ONLINE</h2>
                <div class="main-button">
                    <div class="scroll-to-section"><a href="#section2">Discover Courses</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4>Business & Management</h4>
                            </div>
                            <div class="content-hide">
                                <p>Business and Management courses are designed for people who want to understand the
                                    concepts and principles of business education while acquiring skills through
                                    practical experience in a business environment.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4>Coding & Computing</h4>
                            </div>
                            <div class="content-hide">
                                <p>Computer literacy is a very important skill to possess for life in a variety of
                                    business, scientific and social contexts and a platform through which an individual
                                    sees problem in the light of solutions.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4>Applied Sci-Tech </h4>
                            </div>
                            <div class="content-hide">
                                <p>The Applied Science and technology courses provide an extensive understanding of the
                                    contents, methods, principles and applications of Science and technology and further
                                    insights at the highest level</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4>Languages & Culture</h4>
                            </div>
                            <div class="content-hide">
                                <p>Language impacts the daily lives of members of any race, creed, and region of the
                                    world. It helps express our feelings, desires, and queries to the world around us.
                                </p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Why choose Prudence College?</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Best Education</a></li>
                            <li><a href='#tabs-2'>Top Management</a></li>
                            <li><a href='#tabs-3'>Quality Meeting</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-01.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Best Education</h4>
                                        <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS
                                            layout. Feel free to use it for educational or commercial purposes. You may
                                            want to make <a href="https://paypal.me/templatemo" target="_parent"
                                                rel="sponsored">a little donation</a> to TemplateMo. Please tell your
                                            friends about us. Thank you.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-02.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Top Level</h4>
                                        <p>You can modify this HTML layout by editing contents and adding more pages as
                                            you needed. Since this template has options to add dropdown menus, you can
                                            put many HTML pages.</p>
                                        <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio,
                                            nec interdum quam felis non ante.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-03.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Quality Meeting</h4>
                                        <p>You are NOT allowed to redistribute this template ZIP file on any template
                                            collection website. However, you can use this template to convert into a
                                            specific theme for any kind of CMS platform such as WordPress. For more
                                            information, you shall <a rel="nofollow"
                                                href="https://templatemo.com/contact" target="_parent">contact
                                                TemplateMo</a> now.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
     

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take <em>any online course</em> and win $326 for your next class</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->
    <section class="section courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Courses Currently Offering</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="Course #1">
                        <div class="down-content">
                            <h4>Accounting and Finance part 1</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="Course #2">
                        <div class="down-content">
                            <h4>Accounting and Finance part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="Author 2">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="Course #3">
                        <div class="down-content">
                            <h4>Digital Enterprise and Business Support part 1</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="Author 3">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="Course #4">
                        <div class="down-content">
                            <h4>Digital Enterprise and Business Support part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="Author 4">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Blockchain for Everyone part 1</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Blockchain for Everyone part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="">
                        <div class="down-content">
                            <h4>Machine Learning with Python for Beginners/Intermediate Learners</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Machine Learning with Python part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="">
                        <div class="down-content">
                            <h4>.Net Programming for Everyone part 1</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>.Net Programming for Everyone part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Scientific Data Handling and Programming part 1</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Scientific Data Handling and Programming part 2</h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="">
                        <div class="down-content">
                            <h4>General English part 1</h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-02.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="">
                        <div class="down-content">
                            <h4>General English part 2</h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-03.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="">
                        <div class="down-content">
                            <h4>General English part 3</h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-04.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Business English part 1</h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-05.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Business English part 2</h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-01.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </section>

    <section class="enroll" data-section="section4">
        <div class="col-md-12">
            <h2><b> Enroll Now and Begin Your New Career</b></h2>
            <p>VIRTUAL CLASSROOM INTAKES: SPRING, SUMMER, SUMMER+ AND AUTUMN</p>
            <button type="button" onclick="window.location='http://prudencecollege.ie/apply-now/'" ;
                class="btn btn-default"><b>
                    ENROLL NOW</b></a>
        </div>
        </div>
    </section>

    <!-- Temporary  -->
    
    <section class="section video" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="left-content">
                        <h4>PCDonline</em></h4>
                        <p>PCDonline is an e-learning platform of Prudence College Dublin (PCD) with a difference to
                            offer high quality, accredited and industry-focused online courses driven by well-educated
                            and experienced tutors as well as globally recognised partners. We offer professional
                            diplomas and short courses to learn anywhere at your own pace with or without tutor support.
                        </p>

                        <p> Our online course materials are developed in a virtual classroom environment to facilitate
                            engagement, gain knowledge, and secure real-world experience and skills for career
                            development while getting workplace ready. Flexible payment plans are in place to
                            accommodate learners from various socio-economic backgrounds.
                        </p>
                        {{-- <div class="main-button"><a rel="" href="" target="_parent">Read More</a></div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <article class="video-item">
                        <div class="video-caption">
                            <h4></h4>
                        </div>
                        <figure>
                            <a href="/"><img src="{{ asset('assets/images/about.png') }}" alt=""></a>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="lead" data-section="section3">
        <div class="col-md-12">
            <h2 style="
            margin: 60px "><b> LEADING THE TRANSITION TOWARDS A BRIGHTER FUTURE</b></h2>
        </div>
    </section>
    
    <section class="cpdcourses" data-section="section7">
        <div class="col-md-6">
            <img class="rounded mx-auto d-block" src="{{ asset('assets/images/CPD-Acceditation-Logo-253x300.jpg') }}"
                alt="" />
        </div>

        <div class="col-md-6 ">
            <div class="left-content">
                <h4><b> CPD Accreditation</b></h4>
                <p> we are also promoting courses (CPD Accredited) delivered virtually (interactive, realtime,
                    distance learning) by Prudence College Dublin (www.prudencecollege.ie).</p>

                <p> The vision of PCD is to get recognition as an academic center of excellence in higher
                    education
                    in Europe by attracting brilliant and deserving students from home and abroad; and providing
                    advanced education and training to satisfy present and the future global needs.
                </p>

            </div>
        </div>

    </section>
    
    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Let’s Keep In Touch</h2>
                    </div>
                </div>
                <div class="col-md-6">


                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <img style="margin: 30px;" src="{{ asset('assets/images/contactimage.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a class="logo" href="/"><img src="{{ asset('assets/images/unnamed.jpg') }}" alt=""></a>
                </div>
                <div class="col-sm-2">
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="">Business & Management</a></li>
                        <li><a href="">Coding & Computing</a></li>
                        <li><a href="">Applied Sci-Tech</a></li>
                        <li><a href="">Languages & Culture</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Contact us</h5>
                    <p>Prudence College Dublin
                        C3, ACE Enterprise Park
                        Bawnogue Road
                        Dublin 22, D22 KW40
                        IRELAND</p>
                    <p>Ph: +353 (0)1 254 8998
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
                    </div>
                    <button type="button" class="btn btn-default">Follow us</button>
                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <p>©Prudence College Dubline </p>
        </div>
    </footer>

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
        function Loginpage() {
            window.location = "/login"
        }

    </script>
    <script>
        function Registerpage() {
            window.location = "/register"
        }

    </script>
    <script>
        function language() {
            window.location = "/language"
        }

    </script>

    <script>
        function applied_science() {
            window.location = "/applied_science"
        }

    </script>

    <script>
        function accounting() {
            window.location = "/business"
        }

    </script>

    <script>
        function dotnetProgramming() {
            window.location = "/computerProgramming"
        }

    </script>
    <script>
        function cartmenu() {
            window.location = "/cart"
        }

    </script>
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });

    </script>
    <script>
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

    </script>

</body>

</html>
