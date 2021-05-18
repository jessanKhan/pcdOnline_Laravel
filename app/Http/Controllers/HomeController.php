<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $course_categories = CourseCategory::all();

        return view('welcome', compact('course_categories'));
    }

    public function showCourseCategory(CourseCategory $course_category)
    {
        $course_category->load('courses');

        return view('course.Categories.public-index', compact('course_category'));
    }
}
