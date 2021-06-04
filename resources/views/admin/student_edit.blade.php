@extends('admin.dashboardlayout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Student</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Edit Student</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{ route('std_update', $student->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="name" class="" aria-describedby="basic-addon1"
                                       required value="{{ $student->name }}">
                                <label>First Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="last_name" class="" aria-describedby="basic-addon1"
                                       required value="{{ $student->last_name }}">
                                <label>Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="email" class="" aria-describedby="basic-addon1"
                                       required value="{{ $student->email }}">
                                <label>Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="phone" class="" aria-describedby="basic-addon1"
                                       required value="{{ $student->phone }}">
                                <label>Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="date" name="dob" class="" aria-describedby="basic-addon1"
                                       placeholder="Date of Birth" required value="{{ $student->dob }}">
                                {{-- <label>Date of Birth</label> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control"
                                        data-live-search="true" name="gender">
                                    <option value="Male" @if($student->gender == "Male") selected @endif>Male</option>
                                    <option value="Female" @if($student->gender == "Female") selected @endif>Female</option>
                                    <option value="Other" @if($student->gender == "Other") selected @endif>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="address" class="" aria-describedby="basic-addon1"
                                       required value="{{ $student->address }}">
                                <label>Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control"
                                        data-live-search="true" name="nationality">
                                    <option>Nationality</option>
                                    @foreach($countries as $country_id => $country)
                                        <option value="{{ $country_id }}" @if ($student->nationality == $country_id) selected @endif>{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-cover">
                    <input type="submit" class="btn btn-save" value="submit">
                </div>
            </form>
        </div>
@endsection
