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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
