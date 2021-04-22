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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cart', 'App\Http\Controllers\CourseController@cart')->name('cart');
Route::get('/add-to-cart/{course}', 'App\Http\Controllers\CourseController@addTocart')->name('add');
Route::get('/remove-from-cart/{id}', 'App\Http\Controllers\CourseController@removeFromcart')->name('remove');


Route::get('/language_course', function () {
    return view('course/language');
})->name('language');
Route::get('/business_english', function () {
    return view('course/businessEnglish');
})->name('businessEnglish');

Route::get('/applied_science', function () {
    return view('course/applied_science');
})->name('applied_science');
Route::get('/blockchain', function () {
    return view('course/blockchain');
})->name('blockchain');


Route::get('/accounting', function () {
    return view('course/accounting');
})->name('accounting');
Route::get('/digital_enterprise', function () {
    return view('course/digital');
})->name('digital');

Route::get('/machine_learning', function () {
    return view('course/machineLearning');
})->name('machineLearning');
Route::get('/dotnetProgramming', function () {
    return view('course/computerProgramming');
})->name('computerProgramming');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
