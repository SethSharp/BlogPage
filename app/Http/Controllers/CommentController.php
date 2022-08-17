<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Symfony\Component\Console\Exception\CommandNotFoundException;
use \Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createPage($blog_id) {
        return view('comments.create', [
            'blog_id' => $blog_id
        ]);
    }

    public function updatePage($comment_id) {
        $comment = Comment::find($comment_id);
        return view('comments.update', [
            'comment' => $comment
        ]);
    }

    //CRUD
    public function create($blog_id) {
        request()->validate([
            'comment' => 'required',
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'blog_id' => $blog_id,
            'comment' => request('comment')
        ]);
        return redirect()->route('blogs.index');
    }
    public function update(Comment $comment) {
        request()->validate([
            'comment' => 'required',
        ]);
        $comment->update([
            'comment' => request('comment')
        ]);
        return redirect()->route('blogs.index');
    }
    public function delete(Comment $comment) {
        $comment->delete();
        return redirect()->route('blogs.index');
    }
}
