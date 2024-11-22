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
Route::prefix('users')->name('users.')->group(function () {
    Route::get('profile', function () {
        return 'User Profile';
    })->name('profile');

    Route::get('courses', function () {
        return 'User Courses';
    })->name('courses');

    Route::get('posts', function () {
        return 'User Posts';
    })->name('posts');
});





