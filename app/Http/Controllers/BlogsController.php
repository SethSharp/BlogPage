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

    public function comments() {
        return view('blogs.comment');
    }

    public function createPage() {
        return view('blogs.create');
    }

    public function updatePage($blog_id) {
        $blog = Blog::find($blog_id);
        return view('blogs.update', [
           'blog' => $blog
        ]);
    }

    public function deletePage(Post $post) {
        return view('blogs.delete', [
            'post' => $post
        ]);
    }


    // CRUD operations: create, retrieve, update, delete
    public function create() {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        Blog::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect()->route('blogs.index');
    }
    public function get($blog_id) {
        $blog = Blog::find($blog_id);
        $comments = Comment::all()->where('blog_id', $blog->id);
        return view('blogs.blog', [
            'blog' => $blog,
            'comments' => $comments
        ]);
    }
    public function update(Blog $blog) {
        // ensure stuff is there
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $blog->update([
            'title' => request('title'),
            'body' => request('body'),
        ]);
//        return redirect()->route('blogs.get', ['blog_id' => $blog->id]);
        return redirect()->route('blogs.index');
    }

    public function delete(Blog $blog) {
        $blog->delete();
        Comment::where('blog_id', $blog->id)->delete();
        return redirect()->route('blogs.index');
    }

}
