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
                            <h2 style="color: blue">
                                Overview
                            </h2>
                            {!! $course->overview !!}
                        </div>
                        <div class="COURSE FORMAT">
                            <h2 style="color: blue">
                                COURSE FORMAT
                            </h2>
                            {!! $course->course_format !!}

                        </div>

                        <div class="key-facts">
                            <h2 style="color: blue">
                                Key Facts
                            </h2>
                            {!! $course->key_facts !!}
                        </div>

                    </div>
                    <div class="signup-form">

                        <div class="overview" style="color: black">


                            <div class="MODULES" style="margin-top: px">
                                <h2 style="color: blue;">
                                    {!! $course->module_label !!}
                                </h2>
                                {!! $course->module_description !!}
                            </div>
                            <div class="LEARNING OUTCOMES">
                                <h2 style="color: blue">
                                    LEARNING OUTCOMES
                                </h2>
                                {!! $course->learning_outcome !!}
                            </div>

                            <div class="OPPORTUNITIES">
                                <h2 style="color: blue">
                                    OPPORTUNITIES
                                </h2>
                                {!! $course->opportunities !!}
                            </div>
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: blue">
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
                    @if ($course->child_courses->first()->id != $course->id)
                        <td width="20%">Course Shift</td>
                        <td width="20%">Course Fee</td>
                    @else
                        <td width="40%">Course Fee</td>
                    @endif
                    <td width="10%"></td>
                </tr>
                </thead>
                <tbody>
                @foreach($course->child_courses as $child_courses)
                    <tr>
                        <td width="50%">
                            {{ $child_courses->course_name }} @if($child_courses->id == $course->id) {{ $child_courses->course_for }}@endif
                        </td>
                        @if ($course->child_courses->first()->id != $course->id)
                            <td width="20%">{{$child_courses->shift}}</td>
                            <td width="20%">€{{$child_courses->course_fee}}</td>
                        @else
                            <td width="40%">€{{$child_courses->course_fee}}</td>
                        @endif
                        <td width="10%"><a class="btn btn-success" href="{{ route('add', $child_courses->slug) }}">Enroll</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
