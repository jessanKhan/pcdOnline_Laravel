@extends('admin.dashboardlayout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Employee</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Add Stuff</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="panel-body">
            <form action="" method="" id="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required>
                                <label>Employee ID</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required>
                                <label>Employee Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required>
                                <label>Contact Number</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="first_name" class="" aria-describedby="basic-addon1" required>
                                <label>Email Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea required></textarea>
                                <label>Present Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea required></textarea>
                                <label>Permanent Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                    <option selected>Select Department</option>
                                    <option>CSE</option>
                                    <option>BBA</option>
                                    <option>EEE</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                    <option selected>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                    <option selected>Select Religion</option>
                                    <option>Muslim</option>
                                    <option>Sanatan</option>
                                    <option>Buddha</option>
                                    <option>Christian</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                    <option selected>Select Nationality</option>
                                    <option>Bangladeshi</option>
                                    <option>Indian</option>
                                    <option>Canadian</option>
                                    <option>Australian</option>
                                    <option>Japanese</option>
                                    <option>Chinese</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="file-upload-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="left-section">
                                        <div class="icon-headline-wrapper">
                                            <h1><i class="fa fa-cloud-upload"></i></h1>
                                            <p>Drag & Drop Files Here Or</p>
                                        </div>
                                        <div class="image-storage-wrapper">
                                            <img src="images/student.jpg" />
                                        </div>
                                        <div class="input-file-cover">
                                            <input type="file" class="upload-file" />
                                            <input type="button" class="btn btn-info upload-btn" value="Browse Files" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right-section">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-cover">
                    <input type="submit" class="btn btn-save" value="submit">
                </div>
            </form>
        </div>
    </div>









    </div>
@endsection
