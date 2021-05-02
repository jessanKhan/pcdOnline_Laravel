@extends('layouts.app')

@section('content')

    <div class="main">
        <h2 class="form-title">Coding and Computing</h2>


        <!-- Categories Section Start -->
        <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
            <div class="container">
                <div class="row y-middle mb-50 md-mb-30">
                    <div class="col-md-6 sm-mb-30">
                        <div class="sec-title">
                            <div class="sub-title primary"></div>
                            <h2 class="title mb-0"><b> Our Top Courses </b></h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('machineLearning') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Machine Learning with Python 2</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('machineLearning2') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Machine Learning with Python 1</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('dotnet1') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/3.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">.Net Programming for Everyone 1</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('dotnet2') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/4.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">.Net Programming for Everyone 2</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('blockchain') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/5.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Blockchain for Everyone 1</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('blockchain2') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/6.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Blockchain for Everyone 2</h4>

                            </div>
                        </a>
                    </div>
                    <!--
                                                            <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                                                <a class="categories-item" href="#">
                                                                    <div class="icon-part">
                                                                        <img src="assets/images/categories/icons/7.png" alt="">
                                                                    </div>
                                                                    <div class="content-part">
                                                                        <h4 class="title">Scientific Data Handling and Programming</h4>
                                                                        <span class="courses">01 Courses</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                                                <a class="categories-item" href="#">
                                                                    <div class="icon-part">
                                                                        <img src="assets/images/categories/icons/8.png" alt="">
                                                                    </div>
                                                                    <div class="content-part">
                                                                        <h4 class="title">Digital Enterprise and Business Support</h4>
                                                                        <span class="courses">02 Courses</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            
                                                            <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                                                <a class="categories-item" href="#">
                                                                    <div class="icon-part">
                                                                        <img src="assets/images/categories/icons/9.png" alt="">
                                                                    </div>
                                                                    <div class="content-part">
                                                                        <h4 class="title">Recipes</h4>
                                                                        <span class="courses">7 Courses</span>
                                                                    </div>
                                                                </a>
                                                            </div>-->
                </div>
            </div>
        </div>
        <!-- Categories Section End -->



        <!-- Sign up form 
                                                    <section class="signup">
                                                        <div class="container">
                                                            <div class="signup-content">
                                                                <div class="signup-form">
                                                                    
                                                                    <div class="register-form">

                                                                        <div class="overview">
                                                                            <h2>
                                                                                Overview
                                                                            </h2>
                                                                            <p>
                                                                                Microsoft VisualC # is the most versatile,cross-platform program m ing language in the
                                                                                w orld.The C # can be used to w rite alm ost any type of softw are including console
                                                                                apps,back end services,m obile apps including iO S and Android,w indow s apps,and W
                                                                                ebsites,Enterprise softw are,blockchains,AI,and cloud applications.

                                                                                The C # language is one of the fastest evolving program m ing languages.

                                                                                C # is easy to learn and adapt.C # also has strong support w ithin the com m unity,as w
                                                                                ellas support from the m ost valuable com pany in the w orld,M icrosoft.According to
                                                                                Indeed,the average C # .Net developer earns a salary of € 56,534 per year in Ireland,w
                                                                                hich show s that over tim e your skills w illbecom e valuable.

                                                                                Prudence C ollege is introducing ‘C # .Net for Everyone’ for the first tim e in Ireland
                                                                                to facilitate leaners w ithout prior know ledge to becom e proficient in this custom
                                                                                ised course.

                                                                            </p>
                                                                        </div>

                                                                        <div class="key-facts">
                                                                            <h2>
                                                                                Key Facts
                                                                            </h2>
                                                                            <p>
                                                                                <b>Course duration:</b>10 weeks (20 hours taught,10 hours assignments;60 hours
                                                                                self-directed
                                                                                learning,and 30 hours final project).<br />

                                                                                <b>Entry level:</b>O pen to all professionals (employees of private and commercial
                                                                                semistate
                                                                                organisations and post leaving certificate)

                                                                                students.Some understanding of common programming concepts,such as variables and
                                                                                looping willbe helpful.
                                                                                <br />
                                                                                <b>Lesson duration:</b> 2 Hours lectures and 1 hour assignm ent per week.

                                                                                <br />
                                                                                <b>Size of the class:</b> 10 students In-classroom and 25 in a virtualclassroom .
                                                                                <br />
                                                                                <b>Class timetable:</b> Sunday M orning and Thursday Evening.
                                                                                <br />
                                                                                Course structure:One day per week and one day per weekend.

                                                                            </p>
                                                                        </div>
                                                                        <div class="course-fees">
                                                                            <h2>
                                                                                Course Fees
                                                                            </h2>
                                                                            <ul>
                                                                                <li style="font-size: 12px margin: 6px 0px;; ">Virtual classroom : €770 <a
                                                                                        class="btn btn-success" href="{{ route('add', [17]) }}">Enroll</a></li>
                                                                                <li style="font-size: 12px margin: 6px 0px;;">In classroom : €1100 <a
                                                                                        class="btn btn-success" href="{{ route('add', [18]) }}">Enroll</a></li>
                                                                                <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                                                                    Yearly plan (English + any other 2 courses) : 30% discount

                                                                                </div>
                                                                            </ul>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                                <div class="signup-image">
                                                                    <figure><img src="{{ asset('images/cprog.jpg') }}" alt="sing up image"></figure>
                                                                    {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                            -->

    </div>




@endsection
