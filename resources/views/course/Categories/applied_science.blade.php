@extends('layouts.app')

@section('content')

    <div class="main">
        <h2 class="form-title">Applied Sciences and Technology</h2>


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
                        <a class="categories-item" href="{{ route('applied_science1') }}" target="_blank" style="text-decoration:none">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/1.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                Scientific Data Handling and Programming 
                            <br /><p style="font-size: 12px; color: black;"><b> For Beginners/<br />Intermediate Learners</b></p></h4>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('applied_science2') }}" target="_blank" style="text-decoration:none">
                            <div class="icon-part">
                                <img src="assets/images/categories/icons/2.png" alt="">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                Scientific Data Handling and Programming 
                            <br /><p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </h4>

                            </div>
                        </a>
                    </div>
                    <!--
                                                                  <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                                                       <a class="categories-item" href="#">
                                                                          <div class="icon-part">
                                                                              <img src="assets/images/categories/icons/3.png" alt="">
                                                                                        </div>
                                                                                             <div class="content-part">
                                                                                              <h4 class="title">.Net Programming for Everyone</h4>
                                                                                                    <span class="courses">02 Courses</span>
                                                                                                  </div>
                                                                                </a>
                                                                                                                    </div>
                                                                                                                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                                                                                                        <a class="categories-item" href="#">
                                                                                                                            <div class="icon-part">
                                                                                                                                <img src="assets/images/categories/icons/4.png" alt="">
                                                                                                                            </div>
                                                                                                                            <div class="content-part">
                                                                                                                                <h4 class="title">Blockchain for Everyone</h4>
                                                                                                                                <span class="courses">02 Courses</span>
                                                                                                                            </div>
                                                                                                                        </a>
                                                                                                                    </div>
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
                                                                                                                                        The ability to form research questions and test our hypothesis with data is a
                                                                                                                                        keystone skill in science. This course will equip students to understand data
                                                                                                                                        collection and analysis in the context of research. The course will be a practical
                                                                                                                                        guide to completing data collection and analysis for research with a “hands-on”
                                                                                                                                        approach.
                                                                                                                                        Fundamental skills in R, Python, GIS, and other relevant computer programming
                                                                                                                                        languages will be discussed as tools to extract knowledge from the data.
                                                                                                                                        Statistical theory will be discussed in the context of problems students will
                                                                                                                                        encounter throughout the course to assure a comprehensive understanding
                                                                                                                                        without being overwhelmed. Students will learn the research process from
                                                                                                                                        beginning to end which will culminate in a short research project being
                                                                                                                                        completed to compile the skills learned throughout

                                                                                                                                    </p>
                                                                                                                                </div>

                                                                                                                                <div class="key-facts">
                                                                                                                                    <h2>
                                                                                                                                        Key Facts
                                                                                                                                    </h2>
                                                                                                                                    <ul>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Course duration:</b>10 weeks (20 hours taught, 10
                                                                                                                                            hours assignments; 60
                                                                                                                                            hours self-directed learning, and 30 hours final project). </li>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Entry-level:</b>Open to all /understanding level.
                                                                                                                                        </li>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Lesson duration:</b> 2 hours per lecture + 1 hour
                                                                                                                                            assignment per week.
                                                                                                                                        </li>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Size of the class:</b>10 students In-classroom and 25
                                                                                                                                            in a
                                                                                                                                            Virtual
                                                                                                                                            Classroom .
                                                                                                                                        </li>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Course timetable:</b>Tuesday Evening and Saturday
                                                                                                                                            Morning
                                                                                                                                        </li>
                                                                                                                                        <li style="font-size: 13px; ">● <b>Course structure:</b> One day per week and one day
                                                                                                                                            per weekend
                                                                                                                                        </li>

                                                                                                                                    </ul>
                                                                                                                                </div>
                                                                                                                                <div class="course-fees">
                                                                                                                                    <h2>
                                                                                                                                        Course Fees
                                                                                                                                    </h2>
                                                                                                                                    <ul>
                                                                                                                                        <li style="font-size: 13px; margin: 6px 0px;">Virtual classroom : €770 <a
                                                                                                                                                class="btn btn-success" href="{{ route('add', [21]) }}">Enroll</a></li>
                                                                                                                                        <li style="font-size: 13px; margin: 6px 0px;">In classroom : €1100 <a
                                                                                                                                                class="btn btn-success" href="{{ route('add', [22]) }}">Enroll</a></li>
                                                                                                                                        <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                                                                                                                            Yearly plan (English + any other 2 courses) : 30% discount

                                                                                                                                        </div>
                                                                                                                                    </ul>
                                                                                                                                </div>



                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="signup-image">
                                                                                                                            <figure><img src="{{ asset('images/data science.jpg') }}" alt="sing up image"></figure>
                                                                                                                            {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>

                                                                                                    -->

    </div>




@endsection
