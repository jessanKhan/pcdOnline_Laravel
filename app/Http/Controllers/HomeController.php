<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $orders = Order::with('course')->where('user_id', auth()->user()->id)->get();
        return view('home', compact('orders'));
    }

    public function welcome()
    {
        $courses = Course::all();
        return view('welcome', compact('courses'));
    }

    public function showCourseCategory(CourseCategory $course_category)
    {
        $course_category->load('courses');

        return view('course.Categories.public-index', compact('course_category'));
    }

    public function profileImageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->storeAs('assets/images', $file->getClientOriginalName(), 'public_uploads');

            Auth::user()->update([
                'image' => $path
            ]);
        }

        return redirect()->back();
    }
}
