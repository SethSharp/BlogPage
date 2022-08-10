<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogsController;
use \App\Models\Blog;
use \App\Models\AdminController;
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

Route::get('/', function() {
    return view('welcome');
});

Route::controller(BlogsController::class)->group(function () {
    Route::get('/blogs', 'index');
    Route::get('/blogs/{blog_id}', 'getBlog');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'login');
});
