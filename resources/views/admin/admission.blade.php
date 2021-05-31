@extends('admin.dashboardlayout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Enrollment Request</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>List of Requests</h3>
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
                        <table class="table table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th scope="col">S.ID</th>
                                    <th scope="col">S.Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">s-01</th>
                                    <td>Shamitra Dutta</td>
                                    <td>06</td>
                                    <td>B</td>
                                    <td>Science</td>
                                    <td>01742394092</td>
                                    <td>antu@gmail.com</td>
                                    <td>
                                        <a href="student-profile.html"><i class="fa fa-eye"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">s-02</th>
                                    <td>Shuvash Dutta</td>
                                    <td>07</td>
                                    <td>A</td>
                                    <td>Science</td>
                                    <td>01742394096</td>
                                    <td>shuvash@gmail.com</td>
                                    <td>
                                        <a href="student-profile.html"><i class="fa fa-eye"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">s-01</th>
                                    <td>Andrew DS</td>
                                    <td>10</td>
                                    <td>A</td>
                                    <td>Commerce</td>
                                    <td>01742394052</td>
                                    <td>andrew@gmail.com</td>
                                    <td>
                                        <a href="student-profile.html"><i class="fa fa-eye"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
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
                                        <label>Last Name</label>
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
                                        <label>Last Name</label>
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
