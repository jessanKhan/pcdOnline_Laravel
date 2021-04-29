@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Scientific

                            Data Handling

                            and Programming
                        </h2>
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
                                    <li style="font-size: 13px; ">Virtual classroom : €770 <a
                                            href="{{ route('add', [21]) }}">Enroll</a></li>
                                    <li style="font-size: 13px;">Online : € <a
                                            href="{{ route('add', [22]) }}">Enroll</a></li>
                                    
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



    </div>




@endsection
