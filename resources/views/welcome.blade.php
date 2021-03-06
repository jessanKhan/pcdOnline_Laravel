<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCDonline </title>

    <!-- Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}"
        rel="stylesheet">

    <!-- Styles -->
    <style>
        #map img {
            margin: 30px;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }




        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
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

        @media screen and (min-width: 951px) {
            .js nav[role="navigation"] {
                max-height: none;
            }

            nav[role="navigation"] li {
                display: inline-block;
                margin: 0 0.25em;
            }

            nav[role="navigation"] li a {
                border: 0;
            }

            nav[role="navigation"] li input {
                border: 0;
            }
        }
        }

        @media screen and (max-width: 767px) {
            .features-content {
                padding: 15px;
            }

            .features-content h4 i {
                display: block;
                margin-bottom: 10px;
            }

            .features-content h4 {
                font-size: 14px;
            }

            .features-content p {
                display: none;
            }

            .features-content p.hidden-sm {
                display: block;
            }

            .features-content a {
                letter-spacing: 0px;
                font-size: 13px;
                font-weight: 600;
            }
        }

        @media screen and (max-width: 767px) {
            .tabs-content {
                text-align: center;
            }
        }

        @media screen and (max-width: 767px) {
            .tabs-content img {
                padding-right: 0px;
            }
        }

        @media screen and (max-width: 767px) {
            section.coming-soon .continer h4 {
                text-align: center;
            }
        }

        @media screen and (max-width: 992px) {

            section.coming-soon .continer .counter .days,
            section.coming-soon .continer .counter .hours,
            section.coming-soon .continer .counter .minutes,
            section.coming-soon .continer .counter .seconds {
                font-size: 26px;
            }

            section.coming-soon .continer .counter .days .value,
            section.coming-soon .continer .counter .hours .value,
            section.coming-soon .continer .counter .minutes .value,
            section.coming-soon .continer .counter .seconds .value {
                margin-top: 40px !important;
            }

            section.coming-soon .continer .counter span {
                font-size: 14px !important;
            }
        }

        @media screen and (max-width: 767px) {
            section.coming-soon .right-content {
                margin-top: 60px;
                margin-left: 0px;
            }
        }

        @media screen and (max-width: 767px) {
            section.video .left-content {
                margin-bottom: 45px;
            }

            section.video .first-item .first-content h4,
            section.video .second-item .second-content h4 {
                text-align: center;
            }
        }

        @media screen and (max-width: 800px) and (orientation: landscape),
        screen and (max-height: 300px) {

            /**
       * Remove all paddings around the image on small screen
       */
            .mfp-img-mobile .mfp-image-holder {
                padding-left: 0;
                padding-right: 0;
            }

            .mfp-img-mobile img.mfp-img {
                padding: 0;
            }

            .mfp-img-mobile .mfp-figure:after {
                top: 0;
                bottom: 0;
            }

            .mfp-img-mobile .mfp-figure small {
                display: inline;
                margin-left: 5px;
            }

            .mfp-img-mobile .mfp-bottom-bar {
                background: rgba(0, 0, 0, 0.6);
                bottom: 0;
                margin: 0;
                top: auto;
                padding: 3px 5px;
                position: fixed;
                box-sizing: border-box;
            }

            .mfp-img-mobile .mfp-bottom-bar:empty {
                padding: 0;
            }

            .mfp-img-mobile .mfp-counter {
                right: 5px;
                top: 3px;
            }

            .mfp-img-mobile .mfp-close {
                top: 0;
                right: 0;
                width: 35px;
                height: 35px;
                line-height: 35px;
                background: rgba(0, 0, 0, 0.6);
                position: fixed;
                text-align: center;
                padding: 0;
            }
        }

        @media all and (max-width: 900px) {
            .mfp-arrow {
                -webkit-transform: scale(0.75);
                transform: scale(0.75);
            }

            .mfp-arrow-left {
                -webkit-transform-origin: 0;
                transform-origin: 0;
            }

            .mfp-arrow-right {
                -webkit-transform-origin: 100%;
                transform-origin: 100%;
            }

            .mfp-container {
                padding-left: 6px;
                padding-right: 6px;
            }
        }

        @media screen and (max-width: 767px) {
            section.contact form {
                margin-bottom: 30px;
            }
        }

        @media screen and (max-width: 1085px) and (min-width: 750px) {
            .enroll {
                width: 100%;
                height: auto !important;
                background-color: #f5a425;
                color: white;
                text-align: center;
            }
        }

        @media screen and (max-width: 767px) {
            .enroll {
                width: 100%;
                height: auto !important;
                background-color: #f5a425;
                color: white;
                text-align: center;
            }

            .enroll h2 {
                font-size: 20px;
            }
        }



        @media screen and (max-width: 767px) {
            .rs-categories {
                width: 100%;
                height: auto;
                background-color: white;
            }
        }

        @media screen and (max-width: 780px) {
            .lead {
                width: 100%;
                height: auto;
                background-color: #062872;
                color: white;
                text-align: center;
            }

            .lead h2 {
                text-align: center;
                margin: 0px;
            }
        }

        @media screen and (max-width: 767px) {
            #myFooter {
                text-align: center;
            }

            #map img {
                margin: 0px;
            }
        }

        @media screen and (max-width: 992px) {
            .features {
                background-color: #0c1228;
            }

            .features-content {
                position: relative;
            }

            .features-post {
                border-left: 0;
            }
        }

        @media screen and (max-width: 950px) {
            .main-menu {
                padding-right: 0 !important;
            }

            .main-header .logo {
                line-height: 73px;
            }

            .main-menu li {
                display: block;
                line-height: 1;
                margin-left: 0 !important;
                /* padding: 5px 5px; */
                text-align: center;
            }

            .search-bar {
                padding: 5px 5px;
            }

            .main-menu li .sub-menu {
                opacity: 1;
                visibility: visible;
                position: static;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }

            .main-menu li .sub-menu li:last-child {
                border-bottom: 1px solid rgba(250, 250, 250, 0.25);
            }
        }

        @media screen and (max-width: 950px) and (max-height: 400px) {
            nav[role="navigation"].active {
                max-height: calc(80px + 100vh);
                overflow-y: auto;
            }

        }

        @media screen and (max-width: 767px) {
            footer p {
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 0.25px;
            }
        }

        @media screen and (max-width: 767px) {
            .cpdcourses {
                background-color: white;
                color: #0c1228;
                padding-top: 30px;
                width: 100%;
                height: auto !important;
            }

            .cpdcourses .left-content {
                margin-bottom: 45px;
                text-align: center;
            }

            .cpdcourses .content {
                margin-bottom: 45px;
                text-align: center;
            }

            .cpdcourses img {
                width: 100%;
            }

            #map img {
                width: 100%;
            }
        }

        @media screen and (max-width: 1070px) and (min-width: 750px) {
            #map img {
                width: 100%;
            }

            .cpdcourses {

                height: auto !important;
            }
        }


        /* Header */
        @media screen and (max-width: 950px) {

            .main-nav li:hover a,
            .main-nav li.active a {
                border: 2px solid transparent;
                border-bottom: 1px solid rgba(250, 250, 250, 0.25);
            }

            .main-menu li:hover .sub-menu {

                text-align: -webkit-center;
            }
        }

        @media screen and (max-width: 1180px) {
            .main-banner .caption h6 {
                font-weight: 500;
            }

            .main-banner .caption h2 {
                font-size: 58px;
            }
        }

        @media screen and (max-width: 767px) {
            .main-banner .caption h6 {
                font-weight: 500;
            }

            .main-banner .caption h2 {
                font-size: 36px;
            }
        }

        @media screen and (max-width: 1050px) {
            .main-header .logo {
                padding-left: 30px !important;
                margin-top: 5px;
            }

            .logo {
                margin-top: 5px;
            }

            .main-menu {
                padding-right: 30px !important;
            }

            .main-menu li {
                margin-left: 5px !important;
                /* border-bottom: 1px solid rgba(250, 250, 250, 0.25); */
            }
        }

        @media screen and (max-width: 1200px) {
            .container {
                width: calc(100% - 30px);
                max-width: 100%;
            }
        }

        @media screen and (min-width: 1024px) {
            .container {
                max-width: 1200px;
            }
        }

        @media screen and (max-width: 768px) {

            .signup-content,
            .signin-content {
                flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                justify-content: center;
                -moz-justify-content: center;
                -webkit-justify-content: center;
                -o-justify-content: center;
                -ms-justify-content: center;
            }

            .signup-form {
                margin-left: 0px;
                margin-right: 0px;
                padding-left: 0px;
                /* box-sizing: border-box; */
                padding: 0 30px;
            }

            .signin-image {
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 50px;
                order: 2;
                -moz-order: 2;
                -webkit-order: 2;
                -o-order: 2;
                -ms-order: 2;
            }

            .signup-form,
            .signup-image,
            .signin-form,
            .signin-image {
                width: auto;
            }

            .social-login {
                justify-content: center;
                -moz-justify-content: center;
                -webkit-justify-content: center;
                -o-justify-content: center;
                -ms-justify-content: center;
            }

            .form-button {
                text-align: center;
            }

            .signin-form {
                order: 1;
                -moz-order: 1;
                -webkit-order: 1;
                -o-order: 1;
                -ms-order: 1;
                margin-right: 0px;
                margin-left: 0px;
                padding: 0 30px;
            }

            .form-title {
                text-align: center;
            }


        }

        @media screen and (max-width: 400px) {
            .social-login {
                flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
            }

            .signup-form {
                padding: 0 0;
            }

            .signup-form h2 {
                font-size: 20px;
            }

            .course-fees {
                padding: 10px 4%;
            }

            .social-label {
                margin-right: 0px;
                margin-bottom: 10px;
            }

            nav[role="navigation"] li input {
                margin-left: 60px;
            }
        }

    </style>


    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900') }}"
        rel="stylesheet">

    <title>PCD Online</title>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


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
            <a href="/"><img src="{{ asset('assets/images/newlogo.png') }}" alt=""></a>
            <a href="/">
                <h3 style="color: white; margin: 37px 10px;"><b>PCDonline</b></h3>
            </a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">



                <li class="has-submenu"><a href="#" style="text-decoration:none">Courses</a>
                    <ul class="sub-menu">
                    <li class="has-submenu" >
                            <div class="row"><a href=""
                                    style="text-decoration:none">Business & Management <i
                                        class='fa fa-angle-right fa-fw'></i></a>

										<ul class="sub-menu">
                        <li class="has-submenu" onclick="accounting()">
                            <div class="row"><a href="{{ route('Business') }}" target="_blank"
                                    style="text-decoration:none">Virtual Courses <i
                                        class='fa fa-angle-right fa-fw'></i></a> </div>



                        </li>
                        <li class="has-submenu" onclick="dotnetProgramming()">
                            <div class="row"><a href="" target="_blank"
                                    style="text-decoration:none">Online Courses <i
                                        class='fa fa-angle-right fa-fw'></i></a></div>


                        </li>
						</ul>
										</div>



                        </li>
                        <li class="has-submenu" onclick="dotnetProgramming()">
                            <div class="row"><a href="{{ route('computerProgramming') }}" target="_blank"
                                    style="text-decoration:none">Coding & Computing <i
                                        class='fa fa-angle-right fa-fw'></i></a></div>


                        </li>
                        <li class="has-submenu" onclick="applied_science()">
                            <div class="row"><a href="{{ route('applied_science') }}" target="_blank"
                                    style="text-decoration:none">Applied Sci-Tech<i
                                        class='fa fa-angle-right fa-fw'></i></a></div>

                        </li>
                        <li class="has-submenu " onclick="language()">
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
                <li class="pp"><a href="#section5" style="text-decoration:none">About Us</a></li>
                @guest
                    @if (Route::has('login'))
                        <li class="pp" onclick="Loginpage()">
                            <a href="{{ route('login') }}" target="_blank"
                                style="text-decoration:none">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="pp" onclick="Registerpage()">
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>


                        </ul>
                    </li>
                @endguest
                <li onclick="cartmenu()" class="pp"><a href="/cart" target="_blank"><i class="fa fa-shopping-cart"
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
                    <div class="scroll-to-section"><a style="text-decoration: none" href="#section4">Discover Our
                            Courses</a></div>
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
                                <div class="scroll-to-section"><a href="{{ route('computerProgramming') }}"
                                        onclick="redirectTo('business')" target="_blank"
                                        style="text-decoration:none">Read More</a></div>
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
                                <div class="scroll-to-section"><a href="{{ route('computerProgramming') }}"
                                        onclick="redirectTo('computerProgramming')" target="_blank"
                                        style="text-decoration:none">Read More</a></div>
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
                                <div class="scroll-to-section"><a href="{{ route('applied_science') }}"
                                        onclick="redirectTo('applied_science')" target="_blank"
                                        style="text-decoration:none">Read More</a></div>
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
                                <div class="scroll-to-section"><a href="{{ route('language') }}"
                                        onclick="redirectTo('language')" target="_blank"
                                        style="text-decoration:none">Read More</a></div>
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
    <section class="section courses" data-section="section4" id="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Courses Currently Offering</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/accounting 1.jpg" alt="Course #1">
                        <div class="down-content">
                            <h4><a href="{{ route('accounting1') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Accounting and Finance
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/accounting 2.jpg" alt="Course #2">
                        <div class="down-content">
                            <h4><a href="{{ route('accounting2') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Accounting and Finance
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="Author 2">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/digital en 1.jpg" alt="Course #3">
                        <div class="down-content">
                            <h4><a href="{{ route('digital') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Digital Enterprise and Business Support
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="Author 3">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/digital en 2.jpg" alt="Course #4">
                        <div class="down-content">
                            <h4><a href="{{ route('digital2') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Digital Enterprise and Business Support
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="Author 4">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/blockchain 1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('blockchain') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Blockchain
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/blockchain 2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('blockchain2') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Blockchain
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/python1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('machineLearning') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Machine Learning with Python
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/python2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('machineLearning2') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    Machine Learning with Python
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/dotnet 1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('dotnet1') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    .Net Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/dotnet 2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('dotnet2') }}" target="_blank"
                                    style="text-decoration:none; color:black;">
                                    .Net Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/scientificdata1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('applied_science1') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> Scientific Data Handling and Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/scientificdata2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('applied_science2') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> Scientific Data Handling and Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/geng 1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('generalenglish1') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> General English
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-02.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/geng 2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('generalenglish2') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> General English
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Intermediate Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-03.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/geng 3.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('generalenglish3') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> General English
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-04.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/b eng 1.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('businessEnglish') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> Business English
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate
                                            Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-05.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/b eng 2.jpg" alt="">
                        <div class="down-content">
                            <h4><a href="{{ route('businessEnglish2') }}" target="_blank"
                                    style="text-decoration:none; color:black;"> Business English
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </a></h4>
                            <p></p>
                            <div class="author-image">
                                {{-- <img src="assets/images/author-01.png" alt=""> --}}
                            </div>
                            <div class="text-button-pay">
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </section>
    <!-- ***** enroll Area 
    <section class="enroll" data-section="section4">
        <div class="container pb-3">
            <div class="row">
                <div class="col-md-12">
                    <h2><b> Enroll Now and Begin Your New Career</b></h2>
                    <p>VIRTUAL CLASSROOM INTAKES: SPRING, SUMMER, SUMMER+ AND AUTUMN</p>
                    <button type="button" onclick="window.location='http://prudencecollege.ie/apply-now/'" ;
                        class="btn btn-default"><b>ENROLL NOW</b></a>
                </div>
            </div>
        </div>
    </section>

    ***** -->

    <section id="section5" class="section video" data-section="section5">
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
        <div class="container p-2">
            <div class="row p-5">
                <div class="col-md-12">
                    <h2 style=""><b> LEADING THE TRANSITION TOWARDS A BRIGHTER FUTURE</b></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="cpdcourses" data-section="section7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="left-content">
                        <img class="rounded mx-auto d-block"
                            src="{{ asset('assets/images/CPD-Acceditation-Logo-253x300.jpg') }}" alt="" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="content">
                        <h4><b> CPD Accreditation</b></h4>
                        <p> We are also promoting courses (CPD Accredited) delivered virtually (interactive, realtime,
                            distance learning) by Prudence College Dublin (www.prudencecollege.ie).</p>

                        <p> The vision of PCD is to get recognition as an academic center of excellence in higher
                            education
                            in Europe by attracting brilliant and deserving students from home and abroad; and providing
                            advanced education and training to satisfy present and the future global needs.
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Let???s Keep In Touch</h2>
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
                        <img src="{{ asset('assets/images/contactimage.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a class="logo" href="/"><img src="{{ asset('assets/images/newlogo.png') }}" alt=""></a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Categories</h5>
                    <ul style="line-height: 2 !important">
                        <li><a href="">Business & Management</a></li>
                        <li><a href="">Coding & Computing</a></li>
                        <li><a href="">Applied Sci-Tech</a></li>
                        <li><a href="">Languages & Culture</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5>Contact us</h5>
                    <ul style="font-size:12px; line-height: 1.4 !important">
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

                </div>

            </div>
        </div>
        <div class="footer-copyright">
            <p>@Copyright Prudence College Dublin 2021-22</p>
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
        function redirectTo(routename) {
            window.open = `/${routename}`
        }

    </script>

    <script>
        function Loginpage() {
            window.open = "/login"
        }

    </script>
    <script>
        function Registerpage() {
            window.open = "/register"
        }

    </script>
    <script>
        function language() {
            window.open = "/language"
        }

    </script>

    <script>
        function applied_science() {
            window.open = "/applied_science"
        }

    </script>

    <script>
        function accounting() {
            window.open = "/business"
        }

    </script>

    <script>
        function dotnetProgramming() {
            window.open = "/computerProgramming"
        }

    </script>
    <script>
        function cartmenu() {
            window.open = "/cart"
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
        // function myFunction() {

        // }

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
        $(function() {
            $("a[href*='#']").not("a[href='#']").click(function() {
                e.preventDefault();
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            });
        });

    </script>

</body>

</html>
