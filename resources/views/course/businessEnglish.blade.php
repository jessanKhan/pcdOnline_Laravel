@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Business English</h2>
                        <div class="register-form">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p>
                                    This course is aimed at students who want to excelin the English-speaking work
                                    environm ent.You will learn how to speak and write professional English,with a
                                    task-based approach guaranteed to increase your confidence in real world
                                    work-related situations.The syllabus has been specifically designed to help you to get
                                    the practical skills you willneed to become a workplace communication expert.
                                    Our senior lecturers are highly qualified and trained,and depending on your needs you
                                    can choose between taking either:intensive over two weeks, standard over four weeks
                                    or weekend over ten weeks.
                                    We provide our students with dynamic activities,expert guidance and continuous
                                    feedback meaning you will increase your fluency from day one and make quick and steady
                                    progress.
                                    Take our course from the classroom or anywhere in the world. With virtual learning
                                    options as well as both morning and evening classes available,our course can work to
                                    your schedule.
                                </p>
                            </div>
                            
                            <div class="key-facts">
                                <h2>
                                    Key Facts
                                </h2>
                                <ul style="font-size: 12px; ">
                                    Course Duration:60 hours
                                    This can be taken as a:
                                    <li style="font-size: 12px; ">● Standard Course (over 4 weeks) </li>
                                    <li style="font-size: 12px; ">● Intensive Course (over 2 w eeks)</li>
                                    <li style="font-size: 12px; ">● Weekend Course (over 10 w eeks)
                                    </li>
                                    Entry Level:Interm ediate or Advanced Speakers <br />

                                    Lesson Duration:3 hours per lecture

                                    <li style="font-size: 12px; ">Size of Class:10 students within a face-to-face classroom
                                        and up to 21 students at a live stream interactive online class (Virtual)
                                    </li>
                                    Course Timetable
                                    <li style="font-size: 12px; ">● Standard Course:Monday to Friday,morning or evening
                                    </li>
                                    <li style="font-size: 12px; ">● Intensive Course:Monday to Friday,morning and
                                        afternoon
                                    </li>
                                    <li style="font-size: 12px; ">● Weekend Course:Weekend mornings
                                    </li>
                                </ul>
                            </div>
                            <div class="course-fees">
                                <h2>
                                    Course Fees
                                </h2>
                                <ul>
                                    <li style="font-size: 12px; ">Virtual classroom :
                                        <ul>
                                            <li> Standerd : €385 <a href="{{ route('add', [7]) }}">Enroll</a></li>
                                    </li>
                                    <li> Intensive Weekends:€420<a href="{{ route('add', [8]) }}">Enroll</a></li>
                                    </li>
                                </ul>
                                </li>
                                <li style="font-size: 12px; ">Online :
                                    <ul>
                                        <li> Standerd : € <a href="{{ route('add', [10]) }}">Enroll</a></li>
                                </li>
                                <li> Intensive Weekends:€<a href="{{ route('add', [9]) }}">Enroll</a></li>
                                </li>
                                </ul>
                                </li>
                                
                                </ul>
                            </div>



                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/language1.jpg') }}" alt="sing up image"></figure>
                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
