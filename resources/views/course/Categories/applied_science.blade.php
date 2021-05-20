@extends('layouts.app')

@section('content')

    <div class="main">
        <h1 class="form-title" style="text-align: center; color: black;"><b> Applied Sciences and Technology</b></h1>


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
                        <a class="categories-item" href="{{ route('applied_science1') }}" target="_blank"
                            style="text-decoration:none">
                            {{-- <div class="icon-part">
                                <img src="assets/images/categories/icons/1.png" alt="">
                            </div> --}}
                            <div class="content-part">
                                <h4 class="title">
                                    Scientific Data Handling and Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;" onmouseover="this.style.color='white'"><b> For
                                            Beginners/<br />Intermediate Learners</b></p>
                                </h4>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                        <a class="categories-item" href="{{ route('applied_science2') }}" target="_blank"
                            style="text-decoration:none">
                            {{-- <div class="icon-part">
                                <img src="assets/images/categories/icons/2.png" alt="">
                            </div> --}}
                            <div class="content-part">
                                <h4 class="title">
                                    Scientific Data Handling and Programming
                                    <br />
                                    <p style="font-size: 12px; color: black;"><b> For Advanced Learners</b></p>
                                </h4>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Categories Section End -->





    </div>




@endsection
