<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
})->name('/');

Route::get('/home', function () {
    return view('index');
})->middleware('auth');

Route::get('/employee', function () {
    return view('employeePanel');
})->name('employee')->middleware('auth');

Route::get('/admin', function () {
    return view('adminPanel');
})->name('admin')->middleware('auth');



