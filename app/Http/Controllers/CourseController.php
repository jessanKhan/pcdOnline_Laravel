<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function courses()
    {
        return view('courses')->with('courses', Course::all());
    }

    public function cart()
    {
        return view('cart');
    }

    public function addTocart(Course $course)
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [$course->id => $this->sessionData($course)];
            return $this->setSessionAndReturnResponse($cart);
        }
        if (isset($cart[$course->id])) {
            $cart[$course->id]['quantity']++;
            return $this->setSessionAndReturnResponse($cart);
        }
        $cart[$course->id] = $this->sessionData($course);
        return $this->setSessionAndReturnResponse($cart);
    }

    public function removeFromcart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', "Removed from Cart");
    }

    protected function sessionData(Course $course)
    {
        return [
            'course_name' => $course->course_name,
            'course_type' => $course->course_type,
            'class_type' => $course->class_type,
            'course_fee' => $course->course_fee,
            'quantity' => 1,
        ];
    }

    protected function setSessionAndReturnResponse($cart)
    {
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "Added to Cart");
    }

     public function show(Course $course)
     {
         return view('course.show', compact('course'));
     }
}
