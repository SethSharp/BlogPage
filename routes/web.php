<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogsController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\CommentController;
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
    return view('auth.login');
});

Route::controller(BlogsController::class)->group(function () {
    Route::get('/blogs/get/{blog_id}', 'get')->name('blogs.get');
    Route::get('/blogs/create', 'createPage')->name('blogs.create');
    Route::get('/blogs/update/{blog_id}', 'updatePage')->name('blogs.updatePage');
    Route::get('/blogs/{blog_id}/comments', 'comments')->name('blog.comment');

    // CRUD
    Route::post('/blogs/create/{user_id}', 'create');
    Route::get('/blogs', 'index')->name('blogs.index');
    Route::put('/blogs/{blog}', 'update');
    Route::delete('/blogs/{blog}', 'delete');
});

Route::controller(CommentController::class)->group(function () {
    Route::get('/comments/create/{blog_id}', 'createPage');
    Route::post('/comments/create/{blog_id}', 'create');

    Route::get('/comments/{comment_id}', 'updatePage');
    Route::put('/comments/{comment}', 'update');
    Route::delete('/comments/{comment}', 'delete');
});

Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register')->name('user.register');
});

Auth::routes();

Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'perform']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
