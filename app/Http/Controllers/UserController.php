<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerPage() {
        return view('user.registration');
    }

    public function register() {
        request()->validate([
            'name' => 'required',
        ]);
        User::create([
            'name' => request('name')
        ]);
        return redirect()->route('blogs.index');
    }
}
