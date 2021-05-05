@extends('layouts.app')

@section('content')

    <div class="main">
        <h2 class="form-title" style="text-align: center; color: black"><b> Scientific Data Handling and Programming</b>
        </h2>
        <h3 class="form-title" style="text-align: center; color: black"><b> For Advanced Learners</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">

                    <div class="col-md-6">
                        <div>
                            <img class="rounded mx-auto d-block" src="{{ asset('assets/images/python1.jpg') }}" alt="" />
                        </div>
                        <div class="COURSE FORMAT">
                            <h2 style="color: black">
                                COURSE FORMAT
                            </h2>
                            <p style="color: black">
                                This course is designed for under- and
                                post-graduate students, as well as
                                scientific and technical professionals
                                (NFQ levels 5 and 6) and delivered in
                                both Online and
                                Virtual Classroom environments.
                            </p>
                            <p style="color: black">
                                In addition to classes,course material/handouts will be accessible to students for further
                                study either as hard copy (charge may apply) and/or online (Virtuline Hub).
                            </p>
                            <p style="color: black">
                                Classes will be a mix of lectures,
                                practical and supervised research. The
                                course will be assessed through inclass exercises and through the
                                completion of a small research project
                                where the skills acquired in class will be
                                practiced.
                            </p>
                        </div>
                        <div class="LEARNING OUTCOMES">
                            <h2 style="color: black">
                                LEARNING OUTCOMES
                            </h2>
                            <p style="color: black">
                                ● Understanding research.

                                <br />● Hypothesis formation.

                                <br />● Basic programming skills.

                                <br />● Data science skills and

                                <br />● Scientific writing.

                            </p>
                        </div>
                        <div class="key-facts">
                            <h2 style="color: black">
                                Key Facts
                            </h2>
                            <ul>
                                <li style="font-size: 12px; color: black;">● Course duration: 10 weeks (20 hours taught, 10
                                    hours assignments; 60
                                    hours self-directed learning, and 30 hours final project).</li>
                                <li style="font-size: 12px; color: black;">Entry level: Open to all/Understanding level.
                                </li>
                                <li style="font-size: 12px; color: black;">● Lesson duration: : 2 hours per lecture + 1 hour
                                    assignment per week.</li>

                                <li style="font-size: 12px; color: black;">● Size of the class: 25 in a
                                    Virtual Classroom .
                                </li>
                                <li style="font-size: 12px; color: black;">● Course timetable: Tuesday Evening and Saturday
                                    Morning.
                                </li>
                                <li style="font-size: 12px; color: black;">●Course structure: One day per week and one day
                                    per weekend.
                                </li>
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
                                    The ability to form research questions and test our hypothesis with data is a
                                    keystone skill in science. This course will equip students to understand data
                                    collection and analysis in the context of research. The course will be a practical
                                    guide to completing data collection and analysis for research with a “hands-on”
                                    approach.
                                </p>
                                <p style="color: black">
                                    Fundamental skills in R, Python, GIS, and other relevant computer programming
                                    languages will be discussed as tools to extract knowledge from the data.
                                    Statistical theory will be discussed in the context of problems students will
                                    encounter throughout the course to assure a comprehensive understanding
                                    without being overwhelmed. Students will learn the research process from
                                    beginning to end which will culminate in a short research project being
                                    completed to compile the skills learned throughout.
                                </p>

                            </div>
                            <div class="MODULES" style="margin-top: px">
                                <h2>
                                    MODULES 2
                                </h2>
                                <p style="color: black">
                                    Introduction to research methodology

                                    <br />● Understanding experimental design.

                                    <br />● Understanding the data required to answer questions.

                                    <br />● Learning data collection methods.

                                </p>
                                <p style="color: black">
                                    Introduction to data handling

                                    <br />● Building a database.

                                    <br />● Reading and writing data.

                                    <br />● Understanding dataset curation.

                                </p>
                                <p style="color: black">
                                    Introduction to programming

                                    <br />● Introduction to R stats for science.

                                    <br />● Introduction to Python for science.

                                    <br />● Introduction to GIS for science.

                                </p>
                                <p style="color: black">
                                    ● Research mini-project + assignments

                                    <br />● Online class exercises.

                                    <br />● Research mini-project on a topic chosen.

                                </p>
                            </div>

                            <div class="OPPORTUNITIES">
                                <h2 style="color: black">
                                    OPPORTUNITIES
                                </h2>
                                <p style="color: black">
                                    ● Academic research e.g. Research MSc and PhD.
                                    <br />● Data science jobs across industries including academic and research institutes.

                                    <br />● Government research jobs.

                                    <br />● Consultancy jobs.

                                </p>
                            </div>
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: black">
                                    ADDITIONAL FACILITIES
                                </h2>
                                <p style="color: black">
                                    ● Opportunity to practice data analysis and programming in areas of special interest.

                                    <br />● Improve skills while enjoying free time with leisure activities.

                                    <br />● Access to material posted on our school online platform.

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
                        <td width="50%">Scientific Data Handling and Programming For Advanced Learners
                        </td>
                        <td width="40%">€1100</td>
                        <td width="10%"><a class="btn btn-success" href="{{ route('add', [22]) }}">Enroll</a></td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>




@endsection
