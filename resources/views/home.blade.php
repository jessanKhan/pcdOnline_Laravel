@extends('layouts.app')

@section('content')


    <div class="container main">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    @if (Auth::user()->image != null)
                        <img src="{{ asset(Auth::user()->image) }}" alt=""/>
                    @else
                        <img src="{{ asset('../assets/images/images.png') }}" alt=""/>
                    @endif
                    <div class="file btn btn-lg btn-primary">
                        <form action="{{ route('profile-image-upload') }}" id="profile_image_form" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            Photo
                            <input type="file" name="image" id="profile_image_field"/>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 40px;">
                <div class="profile-head">
                    <h5>
                        {{ Auth::user()->name }}
                    </h5>
                    <h6>
                        Student
                    </h6>

                    <ul class="">
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->id }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->name }} </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p> {{ Auth::user()->last_name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nationality</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->country->name }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->dob }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->gender }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Qualification</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ Auth::user()->qualification }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Accouint Type</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course-fees">

                    <h4> Enrolled Courses</h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td width="70%"> Course Name</td>
                            {{-- <td width="20%">Course Shift</td> --}}
                            <td width="20%">Course Fee</td>
                            <td width="10%"> Status</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                @if ($order->course->parent_course == null || $order->course->parent_course == $order->course->id)
                                    <td width="70%">
                                        {{ $order->course->course_name . ' ' . $order->course->course_for}}
                                    </td>
                                @else
                                    <td width="70%">{{ $order->course->course_name }}</td>
                                    <td width="20%">Morning</td>
                                @endif

                                <td width="20%">€{{ $order->course_price }}</td>
                                @if ($order->status == 'pending')
                                    <td width="10%"><a class="text-danger">Pending</a>
                                @else
                                    <td width="10%"><a class="text-success">Confirmed</a>
                                        @endif
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        $('#profile_image_field').change(function () {
            $('#profile_image_form').submit();
        });
    </script>
@endsection
