@extends('layouts.app')

@section('content')

    <div class="main">
    <h2 class="form-title" style="text-align: center; color: black"><b> Business English</b></h2>
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
                                Students will have the option to join a
class based on their own ability
(intermediate or advanced).
                                </p>
                                <p style="color: black">
                                You will also be able to choose the
format in which you learn as the course
is delivered both Online as well as virtually (live
stream interactive online classes).
                                </p>
                                <p style="color: black">
                                Course materials will be given to provide
students with further study options.
These will be found online (Virtuline Hub)
or will be given as hard copies (charges
may apply).
                                </p>
                                <p style="color: black">
                                The lessons will include practical
exercises and assessments. Students
will have different types of lesson plans
to choose from including: intensive (over
two weeks), standard (over four weeks),
or weekend (over ten weeks).
                                </p>
                            </div>
                            <div class="LEARNING OUTCOMES">
                                <h2 style="color: black">
                                LEARNING OUTCOMES
                                </h2>
                                <p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
communicate in the English-speaking workplace. You will learn: reading,
listening, speech and writing skills.</p>
                                <p style="color: black">
                                <h4 style="color: black">Reading: Students will learn to</h4>
                                <ul style="color: black">
                                    <li style="font-size: 14px; ">● Understand a variety of contemporary everyday business topics.</li>
                                    <li style="font-size: 14px; ">● Read and condense large pieces of information, such as business reports.</li>
                                    <li style="font-size: 14px; ">● Comprehend large pieces of information in a short amount of time, such as
presentations.</li>
                                    
                                </ul></p>
                                <p style="color: black">
                                <h4 style="color: black">Listening: Students will learn to</h4>
                                <ul style="color: black">
                                    <li style="font-size: 14px; ">● Understand professional language.</li>
                                    <li style="font-size: 14px; ">● Follow fast-paced conversations.</li>
                                    <li style="font-size: 14px; ">● Comprehend specific pieces of information.</li>
                                    
                                </ul></p>
                                <p style="color: black">
                                <h4 style="color: black">Speaking: Students will learn to</h4>
                                <ul style="color: black">
                                <li style="font-size: 14px; ">● Use professional language e.g. giving presentations, great interviews and
negotiating.</li>
                                    <li style="font-size: 14px; ">● Demonstrate knowledge of business vocabulary.</li>
                                    <li style="font-size: 14px; ">● Appropriately use of formal and informal language.</li>
                                </ul></p>
                                <p style="color: black">
                                <h4 style="color: black">Writing: Students will learn to</h4>
                                <ul style="color: black">
                                    <li style="font-size: 14px; ">● Write in a professional manner.</li>
                                    <li style="font-size: 14px; ">● Write in a different tone depending on the intended audience.</li>
                                    <li style="font-size: 14px; ">● Write using coherent viewpoints with a beginning, middle and end.</li>
                                </ul></p>
                                <p style="color: black">
                                <h4 style="color: black">Students will get the opportunity to improve their overall grammar, pronunciation and vocabulary as this course also provides lessons in these
areas:</h4>
                                <ul style="color: black">
                                    <li style="font-size: 14px; ">● Grammar: Students will learn how to properly structure sentences.</li>
                                    <li style="font-size: 14px; ">● Pronunciation: Students will be provided with helpful hints and tips to help
them sound more natural.</li>
                                    <li style="font-size: 14px; ">● Vocabulary: Students will broaden their vocabulary range with lessons
focused on: lexical sets, collocations and functional phrases commonly
used in business settings.</li>
                                </ul></p>
                            </div>
                            <div class="key-facts">
                                <h2 style="color: black">
                                    Key Facts
                                </h2>
                                
                                <ul>
                                <li style="font-size: 12px; color: black;">● Course Duration: 60 hours.</li> 
                                    <li style="font-size: 12px; color: black;"><p style="color: black">
                                    This can be taken as a:

                                    <br />● Standard Course (over 4 weeks)

                                    <br />● Intensive Course (over 2 weeks)

                                    <br />● Weekend Course (over 10 weeks)
                                </p>.</li> 
                                    <li style="font-size: 12px; color: black;">● Entry Level: Intermediate or Advanced Speakers.</li>
                                    <li style="font-size: 12px; color: black;">● Lesson Duration:  3 hours per lecture.</li>
                                    
                                    </li>
                                    <li style="font-size: 12px; color: black;">● Size of the class: up to 21 students at a live
stream interactive online class (Virtual).

                                    </li>
                                    <li style="font-size: 12px; color: black;"><p style="color: black">
                                    Course Timetable:

                                    <br />● Standard Course: Monday to Friday, morning or evening

                                    <br />● Intensive Course: Monday to Friday, morning and afternoon

                                    <br />● Weekend Course: Weekend mornings
                                </p>.</li> 
                                </ul>
                            </div>
                            <div class="course-fees">
                                <h2 style="color: black">
                                    Course Fees
                                </h2>
                                <ul>
                                    <li style="font-size: 12px;margin: 6px 0px; color: black;">Virtual classroom : €385<a
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
                                This course is aimed at students who want to excel in the English-speaking work
environment. You will learn how to speak and write professional English, with a
task-based approach guaranteed to increase your confidence in real world
work-related situations. The syllabus has been specifically designed to help you
to get the practical skills you will need to become a workplace communication
expert.
                                </p>
                                <p style="color: black">
                                Our senior lecturers are highly qualified and trained, and depending on your
needs you can choose between taking either: intensive over two weeks,
standard over four weeks or weekend over ten weeks.
                                </p>
                                <p style="color: black">
                                We provide our students with dynamic activities, expert guidance and
continuous feedback meaning you will increase your fluency from day one and
make quick and steady progress.
                                </p>
                                <p style="color: black">
                                Take our course from anywhere in the world. With virtual
learning options as well as online classes are available, our
course can work to your schedule.
                                </p>
                            </div>
                            <div class="MODULES" style="margin-top: px">
                                <h2 style="color: black">
                                MODULES 1
                                </h2>
                                <p style="color: black">
                                This course aims to develop the practical skills you will need to expertly
communicate in the English-speaking workplace. You will learn: reading,
listening, speech and writing skills.</p>
                                <p style="color: black">
                                <h4>Reading: students will practise</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● understanding written language input dealing with a variety of contemporary
business topics.</li>
                                    <li style="font-size: 14px; ">● scanning quickly through texts and locating relevant details.</li>
                                    <li style="font-size: 14px; ">● skimming texts and identifying main points.</li>
                                    
                                </ul></p>
                                <p style="color: black">
                                <h4>Listening: students will practise</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● understanding professional communications.</li>
                                    <li style="font-size: 14px; ">● understanding oral language input and locating specific information.</li>
                                    <li style="font-size: 14px; ">● following speech and identifying the gist of ideas.</li>
                                    
                                </ul></p>
                                <p style="color: black">
                                <h4>Speaking: students will practise</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● engaging in professional conversation (giving presentations, interviewing, negotiating).</li>
                                    <li style="font-size: 14px; ">● using both formal and informal register appropriately.</li>
                                    <li style="font-size: 14px; ">● demonstrating knowledge of business vocabulary.</li>
                                </ul></p>
                                <p style="color: black">
                                <h4>Writing: students will practise</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● writing texts in a professional manner.</li>
                                    <li style="font-size: 14px; ">● selecting a style appropriate to the reader in mind.</li>
                                    <li style="font-size: 14px; ">● putting together viewpoints in a coherent manner.</li>
                                </ul></p>
                                <p style="color: black">
                                <h4>Along with integrated-skills activities, students will also be provided with
appropriate tasks focused on improving their grammar, pronunciation, and lexis. The course includes:</h4>
                                <ul>
                                    <li style="font-size: 14px; ">● grammar lessons with increased scaffolding and extensive practise on the
target language.</li>
                                    <li style="font-size: 14px; ">● lessons aimed at broadening students' vocabulary range with with practise
on lexical sets, collocations, and functional phrases commonly used in
business settings.</li>
                                    <li style="font-size: 14px; ">● pronunciation exercises to help learners sound as natural as possible.</li>
                                </ul></p>
                            </div>
                            
                            
                            <div class="OPPORTUNITIES">
                                <h2 style="color: black">
                                OPPORTUNITIES
                                </h2>
                                <p style="color: black">
                                    ● Understanding and speaking English can empower students and help them achieve their
professional and personal goals.

                                    <br />● Pursuing new career opportunities worldwide and improving job prospects.

                                    <br />● Increasing chances of professional success and career advancement.

                                    <br />● communicating with professionals from all over the world and succeeding in networking.

                                    <br />● Enrolling in course in your specialisation to improve both your English and your industry
know-how.

                                    <br />● gaining access to resources online available only in English.

                                </p>
                            </div>
                            <div class="ADDITIONAL FACILITIES">
                                <h2 style="color: black">
                                ADDITIONAL FACILITIES
                                </h2>
                                <p style="color: black">
                                    ● With our general business practice scenarios, students will have the opportunity to
practice what they have learnt, helping them to increase their fluency from day one.

                                    <br />● Exposure to correct and authentic pronunciation will allow students to pick up a more
natural way of speaking.

                                    <br />● Students will have access to all course materials online for further study.

                                    <br />● With access to support and feedback from our senior lecturers, students are guaranteed
to make quick and steady progress.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




@endsection
