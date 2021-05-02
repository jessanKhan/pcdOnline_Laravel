@extends('layouts.app')

@section('content')

    <div class="main">
        <h1 class="form-title">Business and Management</h1>


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
                        <a class="categories-item" href="{{ route('accounting1') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Accounting and Finance 1</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('accounting2') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Accounting and Finance 2</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('digital') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/3.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Digital Enterprise and Business Support 1</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('digital2') }}">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/4.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Digital Enterprise and Business Support 2</h4>

                            </div>
                        </a>
                    </div>
                    <!--
                                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="categories-item" href="#">
                                        <div class="icon-part">
                                            <img src="assets/images/categories/icons/5.png" alt="">
                                        </div>
                                        <div class="content-part">
                                            <h4 class="title">General English</h4>
                                            <span class="courses">02 Courses</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <a class="categories-item" href="#">
                                        <div class="icon-part">
                                            <img src="assets/images/categories/icons/6.png" alt="">
                                        </div>
                                        <div class="content-part">
                                            <h4 class="title">Business English</h4>
                                            <span class="courses">02 Courses</span>
                                        </div>
                                    </a>
                                </div>
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
                                <!--
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
                                                    An integrated course focusing on financial accounting,management accounting and
                                                    financial management implication for professional students, small business owners and
                                                    business executives who want to sharpen their accounting and finance knowledge.
                                                </p>
                                            </div>




                                            <div class="key-facts">
                                                <h2>
                                                    Key Facts
                                                </h2>
                                                <ul>
                                                    <li style="font-size: 12px; ">● Course duration:10 weeks (30 hours taught,80 hours
                                                        self-directed
                                                        learning,and
                                                        10
                                                        hours final project). Entry-level:Leaving </li>
                                                    <li style="font-size: 12px; ">● Certificate/understanding level.</li>
                                                    <li style="font-size: 12px; ">● Lesson duration: 1.5 hours lecture;2 lessons per week.
                                                    </li>
                                                    <li style="font-size: 12px; ">● Size of the class:10 students In-classroom and 25 in a
                                                        Virtual
                                                        Classroom .
                                                    </li>
                                                    <li style="font-size: 12px; ">● Course timetable:Wednesday Evening and Sunday Morning.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="course-fees">
                                                <h2>
                                                    Course Fees
                                                </h2>
                                                <ul>
                                                    <li style="font-size: 12px;margin: 6px 0px; ">Virtual classroom : €525 <a
                                                            class="btn btn-success" href="{{ route('add', [11]) }}">Enroll</a></li>
                                                    <li style="font-size: 12px;margin: 6px 0px;">In classroom : €725 <a
                                                            class="btn btn-success" href="{{ route('add', [12]) }}">Enroll</a></li>
                                                    <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                                        Yearly plan (English + any other 2 courses) : 30% discount

                                                    </div>
                                                </ul>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="signup-image">
                                        <figure><img src="{{ asset('images/accounting.jpg') }}" alt="sing up image"></figure>
                                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                                    </div>
                                </div>
                            </div>
                        </section>


                -->
    </div>




@endsection
