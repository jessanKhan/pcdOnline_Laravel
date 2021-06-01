<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
}
