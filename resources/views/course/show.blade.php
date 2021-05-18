@extends('layouts.app')

@section('content')
    <div class="main">
        <h2 class="form-title" style="text-align: center; color: black"><b> {{ $course->course_name }}</b>
        </h2>
        <h3 class="form-title" style="text-align: center; color: black"><b> {{ $course->course_for }}</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="col-md-12">
                    <div class="course-banner">
                        <img class="rounded mx-auto d-block" src="{{ asset($course->course_image) }}"
                             alt=""/>
                    </div>
                </div>
                <div class="signup-content col-md-12">

                    <div class="col-md-6">

                        <div class="overview">
                            <h2>
                                Overview
                            </h2>
                            {!! $course->overview !!}
                        </div>
                        <div class="COURSE FORMAT">
                            <h2 style="color: black">
                                COURSE FORMAT
                            </h2>
                            {!! $course->course_format !!}

                        </div>

                        <div class="key-facts">
                            <h2 style="color: black">
                                Key Facts
                            </h2>
                            {!! $course->key_facts !!}
                        </div>

                    </div>
                    <div class="signup-form">

                        <div class="overview" style="color: black">


                            <div class="MODULES" style="margin-top: px">
                                <h2>
                                    {!! $course->module_label !!}
                                </h2>
                                {!! $course->module_description !!}
                            </div>
                            <div class="LEARNING OUTCOMES">
                                <h2 style="color: black">
                                    LEARNING OUTCOMES
                                </h2>
                                {!! $course->learning_outcome !!}
                            </div>

                            <div class="OPPORTUNITIES">
                                <h2 style="color: black">
                                    OPPORTUNITIES
                                </h2>
                                {!! $course->opportunities !!}
                            </div>
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: black">
                                    ADDITIONAL FACILITIES
                                </h2>
                                {!! $course->additional_facilities !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="course-fees">
            <h2 style="color: black">
                Course Fees
            </h2>
            <table class="table table-hover">
                <thead>
                <tr>
                    <td width="50%"> Course Name</td>
                    <td width="40%">Course Fee</td>
                    <td width="10%"></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="50%"> Digital Enterprise and Business Support For Advanced Learners
                    </td>
                    <td width="40%">€750</td>
                    <td width="10%"><a class="btn btn-success" href="{{ route('add', ['digital-enterprise-and-business-support']) }}">Enroll</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
