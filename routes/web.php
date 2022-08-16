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
    return view('users.registration');
});

Route::controller(BlogsController::class)->group(function () {
    Route::get('/blogs/get/{blog_id}', 'get')->name('blogs.get');
    Route::get('/blogs/create', 'createPage')->name('blogs.create');
    Route::get('/blogs/update/{blog_id}', 'updatePage')->name('blogs.updatePage');
    Route::get('/blogs/{blog_id}/comments', 'comments')->name('blog.comment');

    // CRUD
    Route::post('/blogs/create', [BlogsController::class, 'create']);
    Route::get('/blogs', 'index')->name('blogs.index');
    Route::put('/blogs/{blog}', [BlogsController::class, 'update']);
    Route::delete('/blogs/{blog}', [BlogsController::class, 'delete']);
});

Route::controller(CommentController::class)->group(function () {
    Route::get('/comments/create/{blog_id}', [CommentController::class, 'createPage']);
    Route::post('/comments/create/{blog_id}', [CommentController::class, 'create']);

    Route::get('/comments/{comment_id}', [CommentController::class, 'updatePage']);
    Route::put('/comments/{comment}', [CommentController::class, 'update']);
    Route::delete('/comments/{comment}', [CommentController::class, 'delete']);
});

Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register')->name('user.register');
});
