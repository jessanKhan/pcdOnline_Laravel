@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Digital Enterprise
                            and
                            Business Support
                        </h2>
                        <div class="register-form">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p>
                                    Course provides an opportunity to develop practicalentrepreneurialand digitalskills,aim
                                    ed at supporting new business development and grow th within start-up and sm all/ medium
                                    businesses.

                                    <br />● GlobaleCom merce m arket is expected to reach US$ 2.7 trillion in revenues by
                                    2023.

                                    <br />● Global Digital media market is expected to reach a value of US$ 157 billion by
                                    2023.

                                    <br />● Global DigitalPayments market volume willgrow to over US$ 6.7 trillion by 2023.

                                    <br />● Projected Employment growth in digitally enabled businesses of ~30% .

                                    <br />● Upskilling/reskilling is a necessity for people in business sectors.

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
                                    <li style="font-size: 12px; ">● Certificate/understandinGlevel.</li>
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
                                    <li style="font-size: 12px; ">Virtual classroom : €525 <a
                                            href="{{ route('add', [14]) }}">Enroll</a></li>
                                    <li style="font-size: 12px;">Online : € <a
                                            href="{{ route('add', [13]) }}">Enroll</a></li>
                                    
                                </ul>
                            </div>



                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/debs.jpg') }}" alt="sing up image"></figure>
                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
