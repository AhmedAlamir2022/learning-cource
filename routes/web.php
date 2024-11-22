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
    return view('welcome');
});

Route::get('/about', function () {
    return 'about page';
});

Route::get('/contact', function () {
    return 'contact page';
});

Route::post('/contact', function () {
    return 'contact page';
});

Route::get('/blog', function () {
    return 'blog page';
});

Route::get('/services', function () {
    return 'services page';
})->name('services');

Route::get('/team', function () {
    return 'our-team page';
});

Route::get('course/{name}/{hours?}', function ($name, $hours = 0) {
    if($hours == 0){
        return 'course name is '.$name;
    }else{
        return 'course name is '.$name . ' and hours is '.$hours;
    }
})->whereAlpha('name')->whereNumber('hours');



