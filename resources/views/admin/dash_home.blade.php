@extends('admin.dashboardlayout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Quick Links</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>

    <!-- braedcrumb close -->
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-12">
                    <h3>Admin Dashboard - Quicklinks</h3>
                </div>

            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="{{ route('admission') }}"><i class="fa fa-user-plus"></i></a>
                                <a href="{{ route('admission') }}">Enrollment Requests</a>
                            </div>
                        </div>
                        {{-- <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="add-teacher.html"><i class="fa fa-user-plus"></i></a>
                                <a href="add-teacher.html">Add Teacher</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="add-employee.html"><i class="fa fa-user-plus"></i></a>
                                <a href="add-employee.html">Add Stuff</a>
                            </div>
                        </div> --}}
                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="{{ route('student_list') }}"><i class="fa fa-list"></i></a>
                                <a href="{{ route('student_list') }}">Student List</a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="{{ route('add_courses') }}"><i class="fa fa-square"></i></a>
                                <a href="{{ route('add_courses') }}">Add Course</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="{{ route('course_list') }}"><i class="fa fa-list"></i></a>
                                <a href="{{ route('course_list') }}">Course List</a>
                            </div>
                        </div>
                        {{-- <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="groups.html"><i class="fa fa-users"></i></a>
                                <a href="groups.html">Groups</a>
                            </div>
                        </div>



                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="notice.html"><i class="fa fa-file"></i></a>
                                <a href="notice.html">Notice Board</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="fees.html"><i class="fa fa-credit-card"></i></a>
                                <a href="fees.html">Accounts</a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="single-dashboard-menu-wrapper">
                                <a href="account-setting.html"><i class="fa fa-cogs"></i></a>
                                <a href="account-setting.html">Account Setting</a>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dashbox dbox-green">
                        <div class="row">
                            <div class="col-md-3">
                                <h3><i class="fa fa-users"></i></h3>
                            </div>
                            <div class="col-md-9">
                                <h4>Total Students</h4>
                                <p>500</p>
                            </div>
                        </div>
                    </div>
                    <div class="dashbox dbox-red">
                        <div class="row">
                            <div class="col-md-3">
                                <h3><i class="fa fa-user"></i></h3>
                            </div>
                            <div class="col-md-9">
                                <h4>New Students</h4>
                                <p>500</p>
                            </div>
                        </div>
                    </div>
                    <div class="dashbox dbox-blue">
                        <div class="row">
                            <div class="col-md-3">
                                <h3><i class="fa fa-graduation-cap"></i></h3>
                            </div>
                            <div class="col-md-9">
                                <h4>Passed Away</h4>
                                <p>500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row close -->
            <!-- content close -->
        </div>
    </div>
@endsection
