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
                            <div class="course-format">
                                <h2>
                                    Course Format
                                </h2>
                                <p>
                                    This course is designed for under- and post-graduate students,as well as scientific and
                                    technicalprofessionals (NFQ levels 5 and 6) and delivered in both Face-to-Face
                                    (in-classroom ) and VirtualC lassroom environm ents.In addition to classes,course m
                                    aterial

                                    /handouts w illbe sible to students for further study either as hard copy (charge may
                                    apply) and/or online (Virtuline Hub).


                                    Classes will be a mix of lectures, practical and supervised research.The course willbe
                                    assessed through in-class exercises and through the

                                    completion of a small research project where the skills acquired in class willbe
                                    practiced.

                                </p>
                            </div>
                            <div class="modules">
                                <h2>
                                    Modules
                                </h2>
                                <p>
                                    Introduction to research methodology
                                    <br />● Understanding experimental design
                                    <br />● Understanding the data required to answer questions

                                    <br />● Learning data collection methods

                                    Introduction to data handling

                                    <br />● Building a database

                                    <br />● Reading and writing data

                                    <br />● Understanding dataset curation

                                    Introduction to program m ing

                                    <br />● Introduction to R stats for science

                                    <br />● Introduction to Python for science

                                    <br />● Introduction to GIS for science

                                    Research mini project + assignments

                                    <br />● In class exercises
                                    <br />● Research mini project on a topic chosen in class

                                </p>
                            </div>
                            <div class="learning-outcomes">
                                <h2>
                                    Learning Outcomes
                                </h2>
                                <p>
                                    Understanding research,Hypothesis formation, Basic programming skills, Data science
                                    skills and Scientific writing.
                                </p>
                            </div>
                            <div class="additional-facilities">
                                <h2>
                                    Additional Facilities
                                </h2>
                                <ul>
                                    <li style="font-size: 13px; ">● Opportunity to practice data analysis and programming
                                        in areas of specialinterest.
                                    </li>

                                    <li style="font-size: 13px; ">● Improve skills in data analysis and programming while
                                        enjoying free time with leisure activities.
                                    </li>
                                    <li style="font-size: 13px; ">● Access to material posted on our school online platform
                                        .
                                    </li>
                                    <li style="font-size: 13px; ">● Support and feedback from qualified teachers.
                                    </li>




                                </ul>
                            </div>
                            <div class="opportunities">
                                <h2>
                                    Opportunities
                                </h2>
                                <p>
                                    <br />● Academ ic research e.g.Research M Sc and PhD .

                                    <br />● Data science jobs across industries including academic and research institutes.

                                    <br />● Government research jobs.

                                    <br />● Consultancy jobs.


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
                                    <li style="font-size: 13px;">In classroom : €1100 <a
                                            href="{{ route('add', [22]) }}">Enroll</a></li>
                                    <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                        Yearly plan (English + any other 2 courses) : 30% discount

                                    </div>
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
