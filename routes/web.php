<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@welcome');


Route::get('/courses', 'App\Http\Controllers\CourseController@courses')->name('courses');
Route::get('/cart', 'App\Http\Controllers\CourseController@cart')->name('cart');
Route::get('/add-to-cart/{course}', 'App\Http\Controllers\CourseController@addTocart')->name('add');
Route::get('/remove-from-cart/{id}', 'App\Http\Controllers\CourseController@removeFromcart')->name('remove');

// category routes
Route::get('course-category/{course_category}', 'App\Http\Controllers\HomeController@showCourseCategory')
    ->name('show-course-category');
// category routes

Route::get('course/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('course-public-show');

Route::get('/accounting2', function () {
    return view('course/accounting2');
})->name('accounting2');
Route::get('/accounting1', function () {
    return view('course/accounting1');
})->name('accounting1');

Route::get('/applied_science1', function () {
    return view('course/applied_science1');
})->name('applied_science1');
Route::get('/applied_science2', function () {
    return view('course/applied_science2');
})->name('applied_science2');

// Route::get('/applied_science', function () {
//     return view('course/applied_science');
// })->name('applied_science');
// Route::get('/blockchain', function () {
//     return view('course/blockchain');
// })->name('blockchain');


Route::get('/blockchain', function () {
    return view('course/blockchain');
})->name('blockchain');
Route::get('/blockchain2', function () {
    return view('course/blockchain2');
})->name('blockchain2');

Route::get('/businessEnglish', function () {
    return view('course/businessEnglish');
})->name('businessEnglish');
Route::get('/businessEnglish2', function () {
    return view('course/businessEnglish2');
})->name('businessEnglish2');

Route::get('/generalenglish1', function () {
    return view('course/generalenglish1');
})->name('generalenglish1');
Route::get('/generalenglish2', function () {
    return view('course/generalenglish2');
})->name('generalenglish2');
Route::get('/generalenglish3', function () {
    return view('course/generalenglish3');
})->name('generalenglish3');

Route::get('/digital', function () {
    return view('course/digital');
})->name('digital');
Route::get('/digital2', function () {
    return view('course/digital2');
})->name('digital2');

Route::get('/dotnet1', function () {
    return view('course/dotnet1');
})->name('dotnet1');
Route::get('/dotnet2', function () {
    return view('course/dotnet2');
})->name('dotnet2');

Route::get('/machineLearning', function () {
    return view('course/machineLearning');
})->name('machineLearning');
Route::get('/machineLearning2', function () {
    return view('course/machineLearning2');
})->name('machineLearning2');

Route::get('/terms_and_conditions', function () {
    return view('terms');
})->name('terms');

// Route::get('course/{course}', [App\Http\Controllers\CourseController::class, 'show']);

Route::get('/admin_login', function () {
    return view('admin/adminauth');
})->name('admin_login');

Route::post('/admin_login', 'App\Http\Controllers\AdminController@login')->name('admin_login_post');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin/dash_home');
    })->name('dashboard');
    Route::get('/admission', function () {
        return view('admin/admission');
    })->name('admission');
    Route::get('/student_list', function () {
        return view('admin/student_list');
    })->name('student_list');
    Route::get('/student_list/profile', function () {
        return view('admin/std_profile');
    })->name('std_profile');


    Route::get('/admin/add-courses', function () {
        return view('admin/add_courses');
    })->name('add_courses');
    Route::get('/course-list', function () {
        return view('admin/course_list');
    })->name('course_list');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
