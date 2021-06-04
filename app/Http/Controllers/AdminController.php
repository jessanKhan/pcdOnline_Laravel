<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt([
            'username'  => $request->username,
            'password'  => $request->password,
        ])) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin_login');
    }

    public function admission()
    {
        $orders = Order::with('student', 'course')->where('status', 'pending')->get();
        return view('admin/admission', compact('orders'));
    }

    public function confirmOrder(Order $order)
    {
        $order->update(['status' => 'confirm']);

        return redirect()->back();
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();

        return redirect()->back();
    }

    public function studentIndex() {
        $students = User::paginate(10);
        return view('admin/student_list', compact('students'));
    }

    public function studentProfile($id) {
        $student = User::with('country', 'orders')->find($id);
        return view('admin/std_profile', compact('student'));
    }

    public function studentEdit($id)
    {
        $student = User::find($id);
        $countries = Country::pluck('name', 'id');
        return view('admin/student_edit', compact('student', 'countries'));
    }

    public function studentUpdate(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect()->route('std_profile', $id);
    }
}

