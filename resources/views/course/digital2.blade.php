@extends('layouts.app')

@section('content')

    <div class="main">
        <h2 class="form-title" style="text-align: center; color: black"><b> Digital Enterprise and Business Support</b></h2>
        <h3 class="form-title" style="text-align: center; color: black"><b> For Advanced Learners</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="col-md-12">
                    <div class="course-banner">
                        <img class="rounded mx-auto d-block" src="{{ asset('assets/images/digital en 2.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="signup-content col-md-12">

                    <div class="col-md-6">

                        <div class="overview">
                            <h2 style="color: blue">
                                Overview
                            </h2>
                            <p style="color: black">
                                Course provides an opportunity to develop practical entrepreneurial and
                                digital skills, aimed at supporting new business development and growth
                                within start-up and small / medium businesses.

                                <br />● Global eCommerce market is expected to reach US$2.7 trillion in
                                revenues by 2023.
                                <br />● Global Digital Media market is expected to reach a value of US$157
                                billion by 2023.

                                <br />● Global Digital Payments market volume will grow to over US$6.7
                                trillion by 2023.

                                <br />● Projected Employment growth in digitally enabled businesses of
                                ~30%.

                                <br />● Upskilling/reskilling is a necessity for people in business sectors.
                            </p>
                        </div>
                        <div class="COURSE FORMAT">
                            <h2 style="color: blue">
                                COURSE FORMAT
                            </h2>
                            <p style="color: black">
                                This course is designed for interm ediate level(NFQ level 6) learners only and delivered in both Online and Virtual Classroom                                         environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                This course will be supported by
                                practical case work, formative and
                                summative assessment.
                            </p>

                        </div>
                        
                        <div class="key-facts">
                            <h2 style="color: blue">
                                Key Facts
                            </h2>
                            <ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (30 hours taught, 80
                                    hours self-directed
                                    learning, and 10 hours final project).</li>
                                <li style="font-size: 12px; color: black;">Entry level: NFQ level 5 completed/Leaving Certificate/understanding
                                    level.</li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: 1.5 hours lecture; 2 lessons
                                    per week.</li>

                                </li>
                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable:: Morning, Afternoon or
                                    Evening..
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week.
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="signup-form">

                        <div class="overview" style="color: black">


                            <div class="MODULES" style="margin-top: px">
                                <h2 style="color: blue">
                                    MODULES (Part 2)
                                </h2>
                                <ul>
                                    <li style="font-size: 14px; ">● Introduction to Marketing.</li>
                                    <li style="font-size: 14px; ">● The Digital World.</li>
                                    <li style="font-size: 14px; ">● Digital Business.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 1.</li>
                                    <li style="font-size: 14px; ">● Digital Marketing 2.</li>
                                    <li style="font-size: 14px; ">● E-Commerce.</li>
                                    <li style="font-size: 14px; ">● Business Development.</li>
                                    <li style="font-size: 14px; ">● Digital Business Models & Monetisation.</li>
                                    <li style="font-size: 14px; ">● Business Accounting & Finance 1.</li>
                                    <li style="font-size: 14px; ">● Business Accounting & Finance 2.</li>

                                </ul>
                            </div>
                            <div class="LEARNING OUTCOMES">
                            <h2 style="color: blue">
                                LEARNING OUTCOMES
                            </h2>
                            <p style="color: black">
                                ● Skills in Core Marketing.

                                <br />● Digital Media Planning & Activation.

                                <br />● Reach, Engagement & Business Development.

                                <br />● Business Model Design & Business Development.

                            </p>
                        </div>

                            <div class="OPPORTUNITIES">
                                <h2 style="color: blue">
                                    OPPORTUNITIES
                                </h2>
                                <p style="color: black">
                                    ● Highly useful for ACA, ACCA, CPA and CIMA examiners.

                                    <br />● Truly beneficial for building a solid accounting and finance knowledge
                                    for business owners.

                                    <br />● A complete knowledge building package for the job seekers who
                                    wants to join workforce.

                                </p>
                            </div>
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: blue">
                                    ADDITIONAL FACILITIES
                                </h2>
                                <p style="color: black">
                                    ● Opportunity to practice accounting and finance in areas of special interest including
                                    the development of own business ideas.

                                    <br />● Improve related skills while enjoying free time with leisure activities.

                                    <br />● Partial use of computer lab and access to material posted on our
                                    school online platform.
                                    <br />● Support and feedback from qualified teachers.
                                </p>
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
            <h4>Virtual Classroom</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td width="50%"> Course Name </td>
                        <td width="40%">Course Fee</td>
                        <td width="10%"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="50%"> Digital Enterprise and Business Support For Advanced Learners
                        </td>
                        <td width="40%">€525</td>
                        <td width="10%"><a class="btn btn-success" href="{{ route('add', [13]) }}">Enroll</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




@endsection
