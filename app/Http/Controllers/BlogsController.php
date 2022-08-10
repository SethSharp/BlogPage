<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Blog;
use \App\Models\Comment;

class BlogsController extends Controller
{
    public function index() {
        //$blogs = Blog::all();
        $blogs = Blog::orderBy('created_at', 'ASC')->get();
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }
    public function getBlog($blog_id) {
        $blog = Blog::find($blog_id);
        $comments = Comment::all()->where('blog_id', $blog->id);
        return view('blogs.blog', [
            'title' => $blog->title,
            'body' => $blog->body,
            'comments' => $comments
        ]);
    }

    public function comments() {
        return view('blogs.comment');
    }
}
