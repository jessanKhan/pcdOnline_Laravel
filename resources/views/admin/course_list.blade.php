@extends('admin.dashboardlayout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Subjects</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Subjects</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- tab start -->
                <div class="tab_container">
                    <input class="tab-inp" id="tab1" type="radio" name="tabs" checked>
                    <label class="tab-label" for="tab1"><span>Subject List</span></label>

                    <input class="tab-inp" id="tab2" type="radio" name="tabs">
                    <label class="tab-label" for="tab2"><span>Add Subject</span></label>


                    <!-- tab content -->
                    <section id="content1" class="tab-content">

                        <!-- table -->
                        <table class="table table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th scope="col">Subject ID</th>
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Department</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">ENG-01</th>
                                    <td>English 1st part</td>
                                    <td>CSE</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">CSE-01</th>
                                    <td>Computer Fundamentals</td>
                                    <td>CSE</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">CSE-129</th>
                                    <td>JAVA</td>
                                    <td>CSE</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#confirm"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- modal -->
                        <div class="modal fade" id="edit">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Book</h4>
                                        <a href="#" class="btn btn-invert" data-dismiss="modal"><i
                                                class="fa fa-times"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form action="#">
                                                <div class="col-md-6">
                                                    <div class="form-tools-cover">
                                                        <div class="input-group">
                                                            <input type="text" name="first_name" class=""
                                                                aria-describedby="basic-addon1" required>
                                                            <label>Last Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-tools-cover">
                                                        <div class="input-group">
                                                            <input type="text" name="first_name" class=""
                                                                aria-describedby="basic-addon1" required>
                                                            <label>Last Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-tools-cover">
                                                        <div class="input-group">
                                                            <input type="text" name="first_name" class=""
                                                                aria-describedby="basic-addon1" required>
                                                            <label>Last Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-tools-cover">
                                                        <div class="input-group">
                                                            <input type="text" name="first_name" class=""
                                                                aria-describedby="basic-addon1" required>
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
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i
                                                    class="fa fa-times"></i>Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- modal Confirm -->
                        <div class="modal fade" id="confirm">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirm</h4>
                                        <a href="#" class="btn btn-invert" data-dismiss="modal"><i
                                                class="fa fa-times"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are You Sure You Delete This ???</p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="button-cover">
                                            <a href="#" class="btn btn-primary"><i class="fa fa-check"></i>YES</a>
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i
                                                    class="fa fa-times"></i>NO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="content2" class="tab-content">

                        <div class="row">
                            <form action="" method="">
                                <div class="col-md-4">
                                    <div class="form-tools-cover">
                                        <div class="input-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="create Date" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-tools-cover">
                                        <div class="input-group">
                                            <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                                required>
                                            <label>Subject ID</label>
                                        </div>
                                    </div>
                                    <div class="form-tools-cover">
                                        <div class="input-group">
                                            <input type="text" name="first_name" class="" aria-describedby="basic-addon1"
                                                required>
                                            <label>Subject Name</label>
                                        </div>
                                    </div>
                                    <div class="form-tools-cover">
                                        <div class="input-group">
                                            <select id="basic" class="selectpicker show-tick form-control"
                                                data-live-search="true">
                                                <option selected>Department</option>
                                                <option>CSE</option>
                                                <option>BBA</option>
                                                <option>FARMACY</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="button-cover">
                                        <input type="submit" class="btn btn-save" value="Submit Process">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <!-- tab close -->
            </div>

        @endsection
