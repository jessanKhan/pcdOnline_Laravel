<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;

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

    public function courseIndex() {
        $courses = Course::with('category')->paginate(10);
        return view('admin/course_list', compact('courses'));
    }

    public function courseEdit(Course $course)
    {
        $courseCategories = CourseCategory::pluck('name', 'id');
        $parent_courses = Course::select('id', 'course_name', 'course_for')
            ->where("parent_course", null)
            ->orWhere('parent_course', 0)
            ->get();

        return view('admin/edit_courses', compact('course', 'courseCategories', 'parent_courses'));
    }

    public function courseAddFrom() {
        $courseCategories = CourseCategory::pluck('name', 'id');
        $parent_courses = Course::select('id', 'course_name', 'course_for')
            ->where("parent_course", null)
            ->orWhere('parent_course', 0)
            ->get();

        return view('admin/add_courses', compact('courseCategories', 'parent_courses'));
    }

    public function courseUpdate(Request $request, Course $course)
    {
        $updated_data = [
            'course_name' => $request->course_name,
            'course_for' => $request->course_for,
            'overview' => $request->overview,
            'course_format' => $request->course_format,
            'key_facts' => $request->key_facts,
            'module_label' => $request->module_label,
            'module_description' => $request->module_description,
            'learning_outcome' => $request->learning_outcome,
            'opportunities' => $request->opportunities,
            'additional_facilities' => $request->additional_facilities,
            'course_fee' => $request->course_fee,
            'category_id' => $request->category_id,
        ];

        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $path = $file->storeAs('assets/images', $file->getClientOriginalName(), 'public_uploads');
            $updated_data['course_image'] = $path;
        }

        if ($request->has("parent_course")) {
            $updated_data['parent_course'] = $request->parent_course;
        }

        if ($request->has("shift")) {
            $updated_data['shift'] = $request->shift;
        }

        $course->update($updated_data);

        return redirect()->back();
    }

    public function courseStore(Request $request)
    {
        $store_data = [
            'course_name' => $request->course_name,
            'slug' => Str::slug($request->course_name, '-'),
            'course_for' => $request->course_for,
            'overview' => $request->overview,
            'course_format' => $request->course_format,
            'key_facts' => $request->key_facts,
            'module_label' => $request->module_label,
            'module_description' => $request->module_description,
            'learning_outcome' => $request->learning_outcome,
            'opportunities' => $request->opportunities,
            'additional_facilities' => $request->additional_facilities,
            'course_fee' => $request->course_fee,
            'category_id' => $request->category_id,
        ];

        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $path = $file->storeAs('assets/images', $file->getClientOriginalName(), 'public_uploads');
            $store_data['course_image'] = $path;
        }

        if ($request->has("parent_course")) {
            $store_data['parent_course'] = $request->parent_course;
        }

        if ($request->has("shift")) {
            $store_data['shift'] = $request->shift;
        }

        Course::create($store_data);

        return redirect()->route('course_list');
    }
}
