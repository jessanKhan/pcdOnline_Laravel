@extends('layouts.app')

@section('content')

    <div class="main">
    <h2 class="form-title" style="text-align: center; color: black"><b> Machine Learning with Python</b></h2>
    <h3 class="form-title" style="text-align: center; color: black"><b> For Beginners/Intermediate Learners</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    
                <div class="col-md-6">
                <div>
                <img class="rounded mx-auto d-block" src="{{ asset('assets/images/python1.jpg') }}"alt="" />
                </div>
                <div class="COURSE FORMAT">
                                <h2 style="color: black">
                                COURSE FORMAT
                                </h2>
                                <p style="color: black">
                                This course is designed for beginners (Irish N FQ level5) and interm ediate level(N FQ level6) learners only and delivered in both Online and Virtual Classroom environments.
                                </p>
                                <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further study either as hard copy (charge may apply) and/or online (Virtuline Hub).
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
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10 hours assignments; 60
                                                        hours self-directed learning, and 30 hours final project).</li> 
                                    <li style="font-size: 12px; color: black;">Entry level: Open to all.</li> 
                                    <li style="font-size: 12px; color: black;">● Lesson time: 2 hours per lecture and 1 hour assignment per week.</li>
                                    
                                    </li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                        Virtual Classroom .
                                    </li>
                                    <li style="font-size: 12px; color: black;">● Course timetable:Wednesday Evening and Sunday Morning.
                                    </li>
                                    <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day per weekend.
                                    </li>
                                </ul>
                            </div>
                            <div class="course-fees">
                                <h2 style="color: black">
                                    Course Fees
                                </h2>
                                <ul>
                                    <li style="font-size: 12px;margin: 6px 0px; color: black;">Virtual classroom : €770<a
                                            class="btn btn-success" >
    <a href="{{ route('add', [16]) }}">Enroll</a></li>
                                    
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

                                    <br />● Applying logical thinking skills to solve computational problems. 
                                    <br />● Understanding object-oriented programming terminologies and conventions.

                                    <br />● Applying data handling and visualization techniques to work on machine learning.

                                    <br />● Understanding of machine learning techniques

                                </p>
                            </div>
                            <div class="MODULES" style="margin-top: px">
                                <h2>
                                MODULES 1
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
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: black">
                                ADDITIONAL FACILITIES
                                </h2>
                                <p style="color: black">
                                    ● Opportunity to practice programming in areas of special interest.

                                    <br />● Improve coding language skills while enjoying free time with leisure activities.

                                    <br />● Access to material posted on our school online platform.

                                    <br />● Support and feedback from qualified teachers.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
