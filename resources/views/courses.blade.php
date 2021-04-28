@extends('layouts.app')

@section('content')

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h1 class="form-title">All courses</h1>
                        @if (count($courses) > 0)
                            @foreach ($courses as $course)
                                <div class="card">
                                    <img src=" {{ $course->course_image }}" alt=" {{ $course->course_name }}"
                                        class="card-img-top" height="200px" />
                                    <div class="card-header">
                                        {{ $course->course_name }} {{ $course->course_fee }}
                                    </div>
                                    <div class="card-body">
                                        <p>{{ $course->course_type }}, {{ $course->class_type }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('add', [$course->id]) }}" class="btn btn-success btn-blocks">
                                            Add
                                            to cart</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
        </section>



    </div>




@endsection
