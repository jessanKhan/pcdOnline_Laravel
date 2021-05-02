@extends('layouts.app')

@section('content')

    <div class="main">
    <h2 class="form-title" style="text-align: center; color: black"><b> Blockchain for Everyone</b></h2>
    <h3 class="form-title" style="text-align: center; color: black"><b> For Advanced Learners</b></h3>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h1 class="form-title"></h1>
                        <div class="register-form">

                            <div class="overview">
                                <h2>
                                    Overview
                                </h2>
                                <p>
                                    Globally, Blockchain (BC ) development skills rank in the top three job openings with
                                    predicted growth of 517% over time (Computer world).

                                    It is the next wave of technology innovation that will underpin almost every
                                    industry. This course is specifically designed for people from all sectors such as
                                    Finance,Fashion,Food,Telecom and Automation.

                                    Importantly, based on the enormous technological significance and the application
                                    across sectors, ID A Ireland has been promoting ‘Ireland’ as the major EU Hub for
                                    Blockchain.

                                    Prudence is for the first time in Ireland, introducing ‘Blockchain for Everyone’, to
                                    facilitate learners without prior knowledge to become proficient in this specialised
                                    industry area.

                                </p>
                            </div>

                            <div class="key-facts">
                                <h2>
                                    Key Facts
                                </h2>
                                <p>
                                    Course duration:10 w eeks (20 hours taught,10 hours assignments;60 hours self-directed
                                    learning,and 30 hours final project).

                                    Entry level:Open to all professionals (employees of private and

                                    commercial semistate- organisations) and post-leaving certificate

                                    students.Open to all.

                                    Lesson duration:2 hours lecture + 1 hour assignment per week.

                                    Size of the class:10 students In-classroom and 25 in a Virtual Classroom .

                                    Course timetable:Saturday Morning) and Wednesday Evening.

                                    Course structure:One day per week and one day per weekend.

                                </p>
                            </div>
                            <div class="course-fees">
                                <h2>
                                    Course Fees
                                </h2>
                                <ul>
                                    <li style="font-size: 12px; margin: 6px 0px; ">Virtual classroom : €840 <a
                                            class="btn btn-success" href="{{ route('add', [20]) }}">Enroll</a></li>
                                    <li style="font-size: 12px; margin: 6px 0px;">In classroom : €1200<a
                                            class="btn btn-success" href="{{ route('add', [19]) }}">Enroll</a></li>
                                    <div style="font-size: 14px; color:red"> Early bird registration: 20% off
                                        Yearly plan (English + any other 2 courses) : 30% discount

                                    </div>
                                </ul>
                            </div>



                        </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/blockchain.jpg') }}" alt="sing up image"></figure>
                        {{-- <a href="/login" class="signup-image-link">I am already member</a> --}}
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection
