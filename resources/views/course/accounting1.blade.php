@extends('layouts.app')

@section('content')

    <div class="main">
    <h2 class="form-title" style="text-align: center; color: black"><b> Accounting and Finance</b></h2>
    <h3 class="form-title" style="text-align: center; color: black"><b> For Beginners/Intermediate Learners</b></h3>
        <!-- Sign up form 
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h1 class="form-title"></h1>
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

<div class="btn btn-success" >
    <a href="{{ route('add', [11]) }}">Enroll</a>
</div>

    </div>




@endsection
