<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
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
Route::get('/resume', [MainController::class, 'resume'])->name('resume');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/form1', [FormController::class, 'form1'])->name('form1');
Route::post('/postform1', [FormController::class, 'form1_store'])->name('form1.store');



