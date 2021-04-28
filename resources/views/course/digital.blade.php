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
                                    This course willbe supported by practicalcase w ork,formative and summative assessment.

                                </p>
                            </div>
                            <div class="modules">
                                <h2>
                                    Modules
                                </h2>
                                <p>

                                    <br />● Introduction to Marketing

                                    <br />● The Digital World

                                    <br />● Digital Business

                                    <br />● Digital Marketing 1

                                    <br />● Digital Marketing 2

                                    <br />● E-Commerce

                                    <br />● Business Development

                                    <br />● DigitalBusiness Models &

                                    <br />● Monetisation

                                    <br />● Business Accounting & Finance 1

                                    <br />● Business Accounting & Finance 2

                                </p>
                            </div>
                            <div class="learning-outcomes">
                                <h2>
                                    Learning Outcomes
                                </h2>
                                <p>

                                    <br />● Skills in Core M arketing

                                    <br />● DigitalM edia Planning & Activation

                                    <br />● Reach,Engagem ent & Business Developm ent Business M odelDesign & Business
                                    Developm ent

                                </p>
                            </div>
                            <div class="additional-facilities">
                                <h2>
                                    Additional Facilities
                                </h2>
                                <ul>
                                    <li style="font-size: 12px; ">● O pportunity to practice in areas of specialinterest
                                        including the developm ent of ow n business ideas.
                                    </li>

                                    <li style="font-size: 12px; ">● Im prove related skills w hile enjoying free tim e w ith
                                        leisure activities.
                                    </li>
                                    <li style="font-size: 12px; ">● Partialuse of com puter lab and access to m
                                        aterialposted on our schoolonline platform .
                                    </li>

                                    <li style="font-size: 12px; ">● Support and feedback from qualified teachers.
                                    </li>


                                </ul>
                            </div>
                            {{-- <div class="opportunities">
                                <h2>
                                    Opportunities
                                </h2>
                                <p>
                                    Highly useful for ACA,ACCA,CPA and CIMA examiners.

                                    Truly beneficial for building a solid accounting and finance knowledge for business
                                    owners.

                                    A complete knowledge building package for the job seekers who wants to join workforce.

                                </p>
                            </div> --}}
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
                                    <li style="font-size: 12px;">In classroom : €750 <a
                                            href="{{ route('add', [13]) }}">Enroll</a></li>
                                    <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                        Yearly plan (English + any other 2 courses) : 30% discount

                                    </div>
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
