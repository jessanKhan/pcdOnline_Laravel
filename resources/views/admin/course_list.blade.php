@extends('admin.dashboardlayout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Courses</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Courses</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- tab start -->
                <div class="tab_container">
                    <input class="tab-inp" id="tab1" type="radio" name="tabs" checked>
                    <label class="tab-label" for="tab1"><span>Course List</span></label>

                    <!-- tab content -->
                    <section id="content1" class="tab-content">

                        <!-- table -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Course ID</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Course Category</th>
                                    <th scope="col">Course Fee (€)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{ $course->id }}</th>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->category->name }}</td>
                                    <td>{{ $course->course_fee }}</td>
                                    <td>
                                        <a href="{{ route("course-edit", $course->slug) }}"><i class="fa fa-edit"></i></a>
{{--                                        <a href="#" data-toggle="modal" data-target="#confirm"><i--}}
{{--                                                class="fa fa-trash"></i></a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <span style="float: right;">
                            {{ $courses->links() }}
                        </span>
                        <!-- modal -->

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
                </div>
                <!-- tab close -->
            </div>

        @endsection
