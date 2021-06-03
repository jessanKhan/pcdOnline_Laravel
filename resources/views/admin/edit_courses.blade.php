@extends('admin.dashboardlayout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Course</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="panel-wrapper">
        <div class="panel-header">

            <div class="row">
                <div class="col-md-6">
                    <h3>Edit Course</h3>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{ route('course-update', $course->slug) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="course_name" class="" aria-describedby="basic-addon1" value="{{ $course->course_name }}" required>
                                <label>Course Title </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <label>Course Category</label>
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="category_id">
                                    @foreach($courseCategories as $category_id => $category_name)
                                        <option
                                            value="{{ $category_id }}"
                                            @if($category_id == $course->category_id) selected @endif
                                        >{{ $category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="course_for" class="" aria-describedby="basic-addon1" value="{{ $course->course_for }}" required>
                                <label>Course For</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="course_fee" class="" aria-describedby="basic-addon1" value="{{ $course->course_fee }}" required>
                                <label>Course fee(€)</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <label>Parent Category</label>
                            <div class="input-group">
                                <select id="basic" class="selectpicker show-tick form-control" data-live-search="true" name="parent_course">
                                    <option value="0">Select Parent Course</option>
                                    @foreach($parent_courses as $parent_course)
                                        <option
                                            value="{{ $parent_course->id }}"
                                            @if($parent_course->id == $course->parent_course) selected @endif
                                        >{{ $parent_course->course_name . ' ' . $parent_course->course_for }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="shift" class="" aria-describedby="basic-addon1" value="{{ $course->shift }}">
                                <label>Shift</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="overview" name="overview" required>{{ $course->overview }}</textarea>
                                <label>Overview</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="course_format" name="course_format" required>{{ $course->course_format }}</textarea>
                                <label>Course Format</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="key_facts" name="key_facts" required>{{ $course->key_facts }}</textarea>
                                <label>Key Facts</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <input type="text" name="module_label" class="" aria-describedby="basic-addon1" value="{{ $course->module_label }}" required>
                                <label>Moudle Label</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="module_description" name="module_description"
                                    required>{{ $course->module_description }}</textarea>
                                <label>Module Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="learning_outcome" name="learning_outcome"
                                    required>{{ $course->learning_outcome }}</textarea>
                                <label>Learning Outcome</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="opportunities" name="opportunities" required>{{ $course->opportunities }}</textarea>
                                <label>Opportunities</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-tools-cover">
                            <div class="input-group">
                                <textarea class="form-control" id="additional_facilities" name="additional_facilities"
                                    required>{{ $course->additional_facilities }}</textarea>
                                <label>Additional Facilities</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="file-upload-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="left-section">
                                        <div class="icon-headline-wrapper">
                                            <h1>
                                                <img src="{{ asset($course->course_image) }}" style="width: 60%;">
                                            </h1>
                                            <p>Drag & Drop Files Here Or</p>
                                        </div>
                                        <div class="image-storage-wrapper">
                                            <img src="images/student.jpg" />
                                        </div>
                                        <div class="input-file-cover">
                                            <input type="file" class="upload-file" name="course_image"/>
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
@endsection
