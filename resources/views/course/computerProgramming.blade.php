@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">.NET PROGRAMMING FOR EVERYONE USING C# ASP.NET MVC
                        </h2>
                        <div class="register-form">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p>
                                    Microsoft VisualC # is the most versatile,cross-platform program m ing language in the
                                    w orld.The C # can be used to w rite alm ost any type of softw are including console
                                    apps,back end services,m obile apps including iO S and Android,w indow s apps,and W
                                    ebsites,Enterprise softw are,blockchains,AI,and cloud applications.

                                    The C # language is one of the fastest evolving program m ing languages.

                                    C # is easy to learn and adapt.C # also has strong support w ithin the com m unity,as w
                                    ellas support from the m ost valuable com pany in the w orld,M icrosoft.According to
                                    Indeed,the average C # .Net developer earns a salary of € 56,534 per year in Ireland,w
                                    hich show s that over tim e your skills w illbecom e valuable.

                                    Prudence C ollege is introducing ‘C # .Net for Everyone’ for the first tim e in Ireland
                                    to facilitate leaners w ithout prior know ledge to becom e proficient in this custom
                                    ised course.

                                </p>
                            </div>
                            <div class="course-format">
                                <h2>
                                    Course Format
                                </h2>
                                <p>
                                    The course is designed for beginners (Irish NFQ level5) and intermediate level(NFQ
                                    level6) learners and delivered in both Face-to-Face (in-classroom ) and Virtual
                                    Classroom
                                    environments.


                                    <br />
                                    In addition to classes,course material willbe accessible to students for further study
                                    either as hard copy (charge m ay apply) and/or online (Virtuline Hub).


                                    <br />
                                    A continuous assessment approach will be followed with daily assignments (20% ),m
                                    id-term quiz (20% ) and a project task (60% ).
                                    <br />

                                </p>
                            </div>
                            <div class="modules">
                                <h2>
                                    Modules
                                </h2>
                                <p>
                                    <br />● Overview of VisualC # Program m ing

                                    <br />● C # Applications,C lasses and

                                    <br />● Objects,C ontrolStatem ents

                                    <br />● Methods,Arrays

                                    <br />● LINQ ,Entity Fram ew ork and G eneric

                                    <br />● Collections

                                    <br />● Inheritance,Polym orphism ,Interfaces

                                    & Operator Overloading Exception Handling Introduction to W eb D evelopm ent M VC
                                    technique


                                    <br />● Model View and C ontroller Thread and Asynchronous Program m ing Introduction to
                                    SQ L
                                    Server

                                </p>
                            </div>
                            <div class="learning-outcomes">
                                <h2>
                                    Learning Outcomes
                                </h2>
                                <p>
                                    <br />● Major elem ents of the .NET Fram ew ork
                                    <br />● Explain the basic concepts and terminology of object-oriented
                                    program m ing
                                    <br />● Describe data-centric applications, AD O .NET architecture, and
                                    <br />● ADO .NET and SQ L
                                    <br />● Connect to SQ L Server and other data sources
                                    <br />● Build several projects to help practice and test know ledge using
                                    quizzes.

                                    <br />● Deploy Windows and ASP.NET web applications

                                </p>
                            </div>
                            <div class="additional-facilities">
                                <h2>
                                    Additional Facilities
                                </h2>
                                <ul>
                                    <li style="font-size: 12px; ">● Evaluate field problems with .NET programming
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
                                    A num ber of open positions are available in different sectors such as Start-up com
                                    panies working on a range of web applications areas such as:

                                    <br />● Top Tech Companies:Microsoft,IBM ,Facebook,and

                                    <br />● Banks,FinancialServices Companies,State and LocalG overnm ents,

                                    <br />● Enterprise,C ross Platform Mobile Development (iO S,Android,UW P) in generaluse
                                    C #


                                </p>
                            </div>
                            <div class="key-facts">
                                <h2>
                                    Key Facts
                                </h2>
                                <p>
                                    <b>Course duration:</b>10 weeks (20 hours taught,10 hours assignments;60 hours
                                    self-directed
                                    learning,and 30 hours final project).<br />

                                    <b>Entry level:</b>O pen to all professionals (employees of private and commercial
                                    semistate
                                    organisations and post leaving certificate)

                                    students.Some understanding of common programming concepts,such as variables and
                                    looping willbe helpful.
                                    <br />
                                    <b>Lesson duration:</b> 2 Hours lectures and 1 hour assignm ent per week.

                                    <br />
                                    <b>Size of the class:</b> 10 students In-classroom and 25 in a virtualclassroom .
                                    <br />
                                    <b>Class timetable:</b> Sunday M orning and Thursday Evening.
                                    <br />
                                    Course structure:One day per week and one day per weekend.

                                </p>
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
                        <figure><img src="{{ asset('images/cprog.jpg') }}" alt="sing up image"></figure>
                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
