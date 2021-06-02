<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

    public function proceedToPay()
    {
        foreach (session('cart') as $course_id => $course) {
            $order = [
                'course_name' => $course['course_name'],
                'course_price' => $course['course_fee'],
                'course_id' => $course_id,
                'user_id'   => auth()->user()->id,
            ];
            Order::create($order);
        }

        session()->forget('cart');

        return redirect()->away(config('app.PROCEED_TO_PAY'));
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
         $course->load('child_courses');

         if ($course->child_courses->count() == 0) {
             $course->child_courses = collect()->add($course);
         }
         return view('course.show', compact('course'));
     }
}
