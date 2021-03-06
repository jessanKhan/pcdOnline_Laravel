@extends('layouts.app')

@section('content')


    <div class="container main">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{ asset('../assets/images/profilepic.jpg') }}" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Photo
                            <input type="file" name="file" />
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
                                        <p>{{ Auth::user()->nationality }}</p>
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
                                    <td width="70%"> Course Name </td>
                                    {{-- <td width="20%">Course Shift</td> --}}
                                    <td width="20%">Course Fee</td>
                                    <td width="10%"> Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="70%">General English For Beginners Standard Monday to Friday Morning
                                    </td>
                                    {{-- <td width="20%">Morning</td> --}}
                                    <td width="20%">???385</td>
                                    <td width="10%"><a class="text-success">Confirmed</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="70%">General English For Beginners Standard Monday to Friday Afternoon
                                    </td>
                                    {{-- <td width="20%"> Afternoon </td> --}}
                                    <td width="20%">???385</td>
                                    <td width="10%"><a class="text-danger">Pending</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
