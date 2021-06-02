<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
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
}

