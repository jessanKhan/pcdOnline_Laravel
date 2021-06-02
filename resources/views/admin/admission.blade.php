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
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->student->name }} </td>
                                        <td>{{ $order->student->last_name }} </td>
                                        @if ($order->course->parent_course == null || $order->course->parent_course == $order->course->id)
                                            <td>{{ $order->course->course_name . ' ' .  $order->course->course_for }}</td>
                                        @else
                                            <td>{{ $order->course->course_name }}</td>
                                        @endif

                                        <td>{{ $order->student->email }}</td>
                                        <td>{{ $order->student->phone }}</td>
                                        <td>Not confirmed</td>
                                        <td>
{{--                                            {{ route('order-confirm', $order->id) }}--}}
                                            <a href="#" onclick="order_confirm(event, '{{ $order->id }}')"><i class="fa fa-check"></i></a>
                                            <a href="#" onclick="order_delete(event, '{{ $order->id }}')"><i
                                                    class="fa fa-trash"></i></a>
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

    <!-- Confirm -->
    <div class="modal fade" id="confirm">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirm</h4>
                    <a href="#" class="btn btn-invert" data-dismiss="modal"><i class="fa fa-times"></i></a>
                </div>
                <div class="modal-body">
                    <p>Are You Sure You Confirm This ???</p>
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
    <div class="modal fade" id="delete">
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

    <script>
        function order_confirm(event, order_id)
        {
            event.preventDefault();
            var conf = confirm('Are You Sure?')
            if (conf) {
                window.location = '/order-confirm/' + order_id;
            }
        }

        function order_delete(event, order_id)
        {
            event.preventDefault();
            var conf = confirm('Are You Sure?')
            if (conf) {
                window.location = '/order-delete/' + order_id;
            }
        }
    </script>
@endsection
