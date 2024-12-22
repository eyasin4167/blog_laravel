<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('index', [HomeController::class, 'index'])->name('index');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::get('/blog_single', [HomeController::class, 'blog_single'])->name('blog_single');

// Route::get('/blog_list', [HomeController::class, 'blog_list'])->name('blog_list');

// Route::get('/blog_grid', [HomeController::class, 'blog_grid'])->name('blog_grid');



