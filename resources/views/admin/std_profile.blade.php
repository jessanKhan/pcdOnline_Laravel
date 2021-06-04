@extends('admin.dashboardlayout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
                            @if ($student->image != null)
                                <img src="{{ asset($student->image) }}" alt="Profile Picture" />
                            @else
                                <img src="{{ asset('../assets/images/profilepic.jpg') }}" alt="Profile Picture"/>
                            @endif
                        </div>
                        <div class="potrait-table">
                            <table class="table">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ $student->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $student->name }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name:</th>
                                    <td>{{ $student->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Primery Category:</th>
                                    <td>{{ $student->qualification }}</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth:</th>
                                    <td>{{ $student->dob }}</td>
                                </tr>
                                <tr>
                                    <th>Gender:</th>
                                    <td>{{ $student->gender }}</td>
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
                                                <td>{{ $student->address }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contact:</th>
                                                <td>{{ $student->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $student->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nationality:</th>
                                                <td>{{ $student->country->name }}</td>
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
                                            @php
                                                $total_amount = 0;
                                            @endphp
                                            @foreach($student->orders as $order)
                                                @if ($order->status == 'confirmed')
                                                    <tr>
                                                        <th>{{ $order->course_name }}:</th>
                                                        <td>{{ $order->course_price }} Euros</td>
                                                    </tr>
                                                    @php
                                                        $total_amount += $order->course_price;
                                                    @endphp
                                                @endif
                                            @endforeach

                                            <tr>
                                                <th>Total Paid:</th>
                                                <td>{{ $total_amount }}</td>
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
