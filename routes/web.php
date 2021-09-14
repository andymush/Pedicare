<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/problem', function () {
    return view('problem');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/medicines', function () {return view('/medicines');});
Route::get('/Problems/viewproblem', function () {return view('/Problems/viewproblem');});
Route::get('/Doctors/viewdoctor', function () {return view('/Doctors/viewdoctor');});
Route::get('/Doctors/doctors', function () {return view('/Doctors/doctors');});
Route::get('/Meds/viewmedicine', function () {return view('/Meds/viewmedicine');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
