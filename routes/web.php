<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/articles', [MainController::class, 'articles'])->name('articles');

Route::resource('products', ProductController::class);



