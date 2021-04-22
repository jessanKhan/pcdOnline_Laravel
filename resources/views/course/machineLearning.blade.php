@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Machine Learning with Python</h2>
                        <div class="register-form">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p>
                                    A well designed course for novice levelto step into the world of


                                    computing.The course mainly focuses on:

                                    <br />● Applying logical thinking skills to solve computational problems. Understanding
                                    object-oriented programming terminologies and conventions.

                                    <br />● Applying data handling and visualization techniques to work on machine learning.

                                    <br />● Understanding of machine learning techniques

                                </p>
                            </div>
                            <div class="course-format">
                                <h2>
                                    Course Format
                                </h2>
                                <p>
                                    The course is designed for beginners (Irish NFQ level5) and intermediate level(NFQ
                                    level6) learners and delivered in both Face-to-Face (in-classroom) and Virtual
                                    Classroom
                                    environments.


                                    <br />
                                    In addition to classes,course material willbe accessible to students for further study
                                    either as hard copy (charge m ay apply) and/or online (Virtuline Hub).


                                    <br />
                                    A continuous assessment approach will be followed with daily assignments (20% ),m
                                    id-term quiz (20%) and a project task (60%).
                                    <br />

                                </p>
                            </div>
                            <div class="modules">
                                <h2>
                                    Modules
                                </h2>
                                <div>

                                    <p>
                                        <br />● Object Orientated Programming:

                                        Familiarising with definitions and

                                        concepts

                                        <br />● Logical Thinking,Logical Operation:

                                        How to write codes.

                                        <br />● Conditions,Loops: Writing codes

                                        with loops and conditions.

                                        <br />● Python Data structure: W orking

                                        w ith different data structure.

                                        <br />● Function Calling: W orking w ith

                                        m ultiple function.

                                        <br />● Data Set Handling and Visualization:

                                        Learn to installnew libraries and plot

                                        data

                                        <br />● Data Pre-processing:Data

                                        preparation to use machine learning

                                        <br />● Classification Problems:

                                        Understanding classification

                                        algorithms

                                        <br />● Regression Problems:Understanding

                                        regression algorithms

                                        <br />● Project Discussion:Understanding

                                        classification algorithm s

                                    </p>
                                </div>

                            </div>
                            <div class="learning-outcomes">
                                <h2>
                                    Learning Outcomes
                                </h2>
                                <p>
                                    <br />● Understanding of Machine Learning and Python

                                    <br />● Logicalthinking and

                                    <br />● Programming skills

                                </p>
                            </div>
                            <div class="additional-facilities">
                                <h2>
                                    Additional Facilities
                                </h2>
                                <ul>
                                    <li style="font-size: 12px; ">● Opportunity to practice programming in areas of
                                        specialinterest.
                                    </li>

                                    <li style="font-size: 12px; ">● Improve coding language skills w hile enjoying free time
                                        with leisure activities.
                                    </li>
                                    <li style="font-size: 12px; ">● Access to material posted on our schoolonline platform .
                                    </li>

                                    <li style="font-size: 12px; ">● Support and feedback from qualified teachers.
                                    </li>


                                </ul>
                            </div>
                            <div class="opportunities">
                                <h2>
                                    Opportunities
                                </h2>
                                <p>
                                    <br />● G ain strong foundation on m achine learning
                                    <br />● Advance know ledge and skills in python coding.

                                    <br />● Enter high dem and IT Jobs m arket as Python developer.


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
                                    <li style="font-size: 12px; ">Virtual classroom : €770</li>
                                    <li style="font-size: 12px;">In classroom : €1100</li>
                                    <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                        Yearly plan (English + any other 2 courses) : 30% discount

                                    </div>
                                </ul>
                            </div>



                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/Machine-Learning.jpg') }}" alt="sing up image"></figure>
                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
