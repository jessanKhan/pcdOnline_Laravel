@extends('layouts.app')

@section('content')

<div class="main">
    <h2 class="form-title" style="text-align: center; color: black;"><b> {{ $course_category->name }}</b></h2>

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
                @foreach($course_category->courses as $course)
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('course-public-show', $course->slug) }}" target="_blank" style="text-decoration:none">
                            <div class="icon-part">
                                <img src="{{ asset($course->course_image) }}" alt="">
                            </div>
                            <div class="content-part">
                                @php
                                    $course_for = $course->course_for;
                                    $course_for = implode(' /<br>', explode('/', $course_for));
                                @endphp
                                <h4 class="title">
                                    {{ $course->course_name }}
                                    <br /><p style="font-size: 12px; color: black;" onmouseover="this.style.color='white'"><b>
                                    {!! $course_for !!}</b></p></h4>
                            </div>
                        </a>
                    </div>
                @endforeach
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
</div>

@endsection
