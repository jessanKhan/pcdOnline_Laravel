@extends('admin.dashboardlayout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dash_home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Student Profile</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Student Profile</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="potrait-wrapper">
                        <div class="img-wrapper">
                            <img src="{{ asset('/assets/images/student.jpg') }}" alt="Profile Picture" />
                        </div>
                        <div class="potrait-table">
                            <table class="table">
                                <tr>
                                    <th>ID:</th>
                                    <td>UG02-36-14-026</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>Shamitra</td>
                                </tr>
                                <tr>
                                    <th>Last Name:</th>
                                    <td>Dutta</td>
                                </tr>
                                <tr>
                                    <th>Primery Category:</th>
                                    <td>BUsiness and Management</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth:</th>
                                    <td>20/12/1999</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>Male</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="panel-wrapper">
                        <div class="panel-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Contact Info</h5>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="potrait-table">
                                        <table class="table">

                                            <tr>
                                                <th>Address:</th>
                                                <td>41/45 road 3, Mymensingh</td>
                                            </tr>
                                            <tr>
                                                <th>Contact:</th>
                                                <td>01742394092</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>my@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th>Nationality:</th>
                                                <td>Bangladeshi</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                    <div class="panel-wrapper">
                        <div class="panel-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Enrolled Courses</h5>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="potrait-table">
                                        <table class="table">
                                            <tr>
                                                <th>Genaral English for Beginer:</th>
                                                <td>535 Euros</td>
                                            </tr>

                                            <tr>
                                                <th>Total Paid:</th>
                                                <td>535 Euros</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
