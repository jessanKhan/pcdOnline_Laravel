<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function addTocart(Course $course)
    {
        # code...
    }
    public function removeFromcart(Course $id)
    {
        # code...
    }
}
