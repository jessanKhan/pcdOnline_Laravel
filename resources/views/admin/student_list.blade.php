@extends('admin.dashboardlayout')

@section('content')
    <!-- top menu close-->
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Student List</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Student List</h3>
                </div>
                <div class="col-md-6">
                    <div class="action-btn-cover btn-group pull-right">
                        <a href="student-addmision.html"><i class="fa fa-plus"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-print"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-download"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-share"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-envelope"></i></a>
                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrapper">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Gender</th>

                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->gender }}</td>

                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <a href="{{ route('std_profile', $student->id) }}"><i class="fa fa-eye"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
{{--                                        <a href="#" data-toggle="modal" data-target="#confirm"><i--}}
{{--                                                class="fa fa-trash"></i></a>--}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content close -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Book</h4>
                    <a href="#" class="btn btn-invert" data-dismiss="modal"><i class="fa fa-times"></i></a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="#">
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                            required>
                                        <label>First Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                            required>
                                        <label>Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                            required>
                                        <label>Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                            required>
                                        <label>Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="date" name="first_name" class="" aria-describedby="basic-addon1"
                                            placeholder="Date of Birth" required>
                                        {{-- <label>Date of Birth</label> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <select id="basic" class="selectpicker show-tick form-control"
                                            data-live-search="true">
                                            <option selected>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                            required>
                                        <label>Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-tools-cover">
                                    <div class="input-group">
                                        <select id="basic" class="selectpicker show-tick form-control"
                                            data-live-search="true">
                                            <option selected>Nationality</option>
                                            <option>USA</option>
                                            <option>Bangladesh</option>
                                            <option>Ireland</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="button-cover">
                        <a href="#" class="btn btn-primary"><i class="fa fa-check"></i>Update</a>
                        <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm -->
    <div class="modal fade" id="confirm">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirm</h4>
                    <a href="#" class="btn btn-invert" data-dismiss="modal"><i class="fa fa-times"></i></a>
                </div>
                <div class="modal-body">
                    <p>Are You Sure You Delete This ???</p>
                </div>
                <div class="modal-footer">
                    <div class="button-cover">
                        <a href="#" class="btn btn-primary"><i class="fa fa-check"></i>YES</a>
                        <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>NO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
