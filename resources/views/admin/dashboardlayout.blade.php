<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>School College Management System - Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="{{ asset('/assets/css/font-awesome.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="{{ asset('/assets/css/dataTables.bootstrap.min.css') }}">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}"
        type="text/css" rel="stylesheet">
    <link rel="{{ asset('/assets/css/jquery.dataTables.min.css') }}">
    <link href="{{ asset('/assets/css/dataTables.jqueryui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/dataTables.semanticui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/dataTables.foundation.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/assets/css/dataTables.material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/dataTables.uikit.min.css') }}" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/admin_style.css') }}">
</head>

<body>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Reliable Accountant</h3>
                <strong>RA</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="fa fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Student
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="student-addmision.html">Student Admission</a></li>
                        <li><a href="student-list.html">Student List</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Teacher
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li><a href="add-teacher.html">Add Teacher</a></li>
                        <li><a href="teacher-list.html">Teacher List</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Stuff
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li><a href="add-employee.html">Add Stuff</a></li>
                        <li><a href="employee-list.html">Stuff List</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="departments.html">
                        <i class="fa fa-th"></i>
                        Departments
                    </a>
                </li>
                <li>
                    <a href="classes.html">
                        <i class="fa fa-th-large"></i>
                        Classes
                    </a>
                </li>
                <li>
                    <a href="sections.html">
                        <i class="fa fa-square"></i>
                        Page Contents
                    </a>
                </li>
                <li>
                    <a href="groups.html">
                        <i class="fa fa-users"></i>
                        Groups
                    </a>
                </li>
                <li>
                    <a href="subjects.html">
                        <i class="fa fa-clipboard"></i>
                        Courses
                    </a>
                </li>
                {{-- <li>
                    <a href="#pageSubmenu10" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-clock-o"></i>
                        Routine
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu10">
                        <li><a href="routin2.html">Student Routine</a></li>
                        <li><a href="routin2.html">Teacher Routine</a></li>
                        <li><a href="routin2.html">Employee Routine</a></li>
                        <li><a href="routin2.html">Add Routine</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="#pageSubmenu11" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-check-circle"></i>
                        Attendance
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu11">
                        <li><a href="attendence-student.html">Student Attendance</a></li>
                        <li><a href="attendence-teacher.html">Teacher Attendance</a></li>
                        <li><a href="attendence-employee.html">Employee Attendance</a></li>
                        <li><a href="attendence-stuffs"></a>Stuffs Attendance</li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="exam.html">
                        <i class="fa fa-align-justify"></i>
                        Exam
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li><a href="#">Manage Exam</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="marks.html">
                        <i class="fa fa-calculator"></i>
                        Marks
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu8">
                        <li><a href="#">Set Marks</a></li>
                        <li><a href="#">Result List</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        Library
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li><a href="library.html">Manage Books</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="#">
                        <i class="fa fa-money"></i>
                        Accounts
                    </a>
                </li>
                {{-- <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-bus"></i>
                        Transport
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li><a href="transport.html">Add Transport</a></li>
                        <li><a href="transport-list.html">Transport List</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="notice.html">
                        <i class="fa fa-clipboard"></i>
                        Notice
                    </a>
                </li>
                {{-- <li>
                    <a href="events.html">
                        <i class="fa fa-calendar"></i>
                        Events
                    </a>
                </li> --}}
                <li>
                    <a href="account-setting.html">
                        <i class="fa fa-cogs"></i>
                        Account Setting
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-align-left"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-phone"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top menu start-->
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- admin notification bar start-->
                        <div class="admin-dropdown-cover pull-right">
                            <div class="dropdown-btn-cover">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu right-aligned">
                                        <li>
                                            <p><i class="fa fa-user"></i>Admin</p>
                                        </li>
                                        <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i>System Setting</a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i>Account Settings</a></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="admin-dropdown-cover pull-right">
                            <div class="dropdown-btn-cover">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                    </a>
                                    <ul class="dropdown-menu right-aligned">
                                        <li>
                                            <p><i class="fa fa-envelope-o"></i>Messages</p>
                                        </li>
                                        <li><a href="#"><img src="img/msg1.jpg" />Hi, I am John Doe</a></li>
                                        <li><a href="#"><img src="img/msg2.jpg" />Can you read the documents?<span
                                                    class="badge-green">5</span></a></li>
                                        <li><a href="#"><img src="img/msg3.jpg" />This is fantastic<span
                                                    class="badge-red">3</span></a></li>
                                        <li><a href="#"><img src="img/msg4.jpg" />May i know the admin name?<span
                                                    class="badge-red">3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="admin-dropdown-cover pull-right">
                            <div class="dropdown-btn-cover">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                    <ul class="dropdown-menu right-aligned">
                                        <li>
                                            <p><i class="fa fa-globe"></i>Notifications</p>
                                        </li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i>Server Ready To Run</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i>1 Admin Has been Approved</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i>100 Students Registered</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i>Notice Has Been Published</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- admin notification bar close-->
                    </div>
                </div>
            </nav>

            <!-- top menu close-->
            <!-- braedcrumb start -->

            @yield('content')
        </div>
    </div>





    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js">
    </script>
    <script src="{{ asset('/assets/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dataTables.foundation.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dataTables.uikit.min.js') }}"></script>
    <script src="{{ asset('/assets/s/dataTables.semanticui.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dataTables.material.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dataTables.jqueryui.min.js') }}"></script>
    <!-- datepicker -->
    <script>
        $(function() {
            $('#datetimepicker1').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                autoclose: true,
                todayHighlight: true
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
    <script type="text/javascript">
        $('#mydata').dataTable();

    </script>




</body>

</html>
