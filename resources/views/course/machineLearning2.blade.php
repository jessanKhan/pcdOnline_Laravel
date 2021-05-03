@extends('layouts.app')

@section('content')

    <div class="main">
    <h2 class="form-title" style="text-align: center; color: black"><b> Machine Learning with Python</b></h2>
    <h3 class="form-title" style="text-align: center; color: black"><b> For Advanced Learners</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    
                <div class="col-md-6">
                <div>
                <img class="rounded mx-auto d-block" src="{{ asset('assets/images/python2.jpg') }}"alt="" />
                </div>
                <div class="COURSE FORMAT">
                                <h2 style="color: black">
                                COURSE FORMAT
                                </h2>
                                <p style="color: black">
                                This course is designed for beginners (Irish N FQ level5) and interm ediate level(N FQ level6) learners only and delivered in both Face-to-Face (in-classroom ) and Virtual Classroom environments.
                                </p>
                                <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further study either as hard copy (charge m ay apply) and/or online (Virtuline Hub).
                                </p>
                                <p style="color: black">
                                A continuous assessment approach will be followed with daily assignments (20% ),mid-term quiz (20% ) and a project task (60% ).
                                </p>
                            </div>
                            <div class="LEARNING OUTCOMES">
                                <h2 style="color: black">
                                LEARNING OUTCOMES
                                </h2>
                                <p style="color: black">
                                    ● Understanding of Machine Learning and Python.

                                    <br />● Logicalthinking and

                                    <br />● Programming skills.

                                </p>
                            </div>
                            <div class="key-facts">
                                <h2 style="color: black">
                                    Key Facts
                                </h2>
                                <ul>
                                <li style="font-size: 12px; color: black;">● Course duration:10 weeks (30 hours taught,80 hours
                                        self-directed
                                        learning,and
                                        10
                                        hours final project).</li> 
                                        <li style="font-size: 12px; color: black;">Entry level: Open to all.</li> 
                                    <li style="font-size: 12px; color: black;">● Certificate/understanding level.</li>
                                    <li style="font-size: 12px; color: black;">● Certificate/understanding level.</li>
                                    <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture;2 lessons per week.
                                    </li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                        Virtual Classroom .
                                    </li>
                                    <li style="font-size: 12px; color: black;">● Course timetable:Wednesday Evening and Sunday Morning.
                                    </li>
                                </ul>
                            </div>
                            <div class="course-fees">
                                <h2 style="color: black">
                                    Course Fees
                                </h2>
                                <ul>
                                    <li style="font-size: 12px;margin: 6px 0px; color: black;">Virtual classroom : €770<a
                                            class="btn btn-success" href="{{ route('add', [16]) }}">Enroll</a></li>
                                    
                                </ul>
                            </div>
            </div>
                    <div class="signup-form">
                        
                        <div class="overview" style="color: black">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p style="color: black">
                                    A well designed course for novice levelto step into the world of


                                    computing.The course mainly focuses on:

                                    <br />● Applying logical thinking skills to solve computational problems. Understanding
                                    object-oriented programming terminologies and conventions.

                                    <br />● Applying data handling and visualization techniques to work on machine learning.

                                    <br />● Understanding of machine learning techniques

                                </p>
                            </div>
                            <div class="MODULES" style="margin-top: px">
                                <h2>
                                MODULES 2
                                </h2>
                                <ul>
                                    <li style="font-size: 14px; ">● Object Orientated Programming: Familiarising with definitions and concepts.</li>
                                    <li style="font-size: 14px; ">● LogicalThinking,Logical Operation: How to write codes.</li>
                                    <li style="font-size: 14px; ">● Conditions,Loops: Writing codes with loops and conditions.</li>
                                    <li style="font-size: 14px; ">● Python Data structure:	Working with different data structure.</li>
                                    <li style="font-size: 14px; ">● Function Calling: Working with multiple function.</li>
                                    <li style="font-size: 14px; ">● Data Set Handling and Visualization: Learn to install new libraries and plot data.</li>
                                    <li style="font-size: 14px; ">● Data Pre-processing: Data preparation to use machine learning.</li>
                                    <li style="font-size: 14px; ">● Classification Problems: Understanding classification algorithms.</li>
                                    <li style="font-size: 14px; ">● Regression Problems:Understanding regression algorithms.</li>
                                    <li style="font-size: 14px; ">● Project Discussion: Understanding classification algorithms.</li>
                                    
                                </ul>
                            </div>
                            <div class="OPPORTUNITIES">
                                <h2 style="color: black">
                                OPPORTUNITIES
                                </h2>
                                <p style="color: black">
                                    ● Gain strong foundation on machine learning.

                                    <br />● Advance knowledge and skills in python coding.

                                    <br />● Enter high demand IT Jobs market as Python developer.

                                </p>
                            </div>
                            <!--
                            
                            
-->


                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
