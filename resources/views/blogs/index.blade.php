@extends('layouts.app')

@section('content')
    <div class="justify-center items-center text-center h-screen">
        <div class="text-center justify-center items-center">
            <h1 class="p-6 font-bold text-7xl">
                Blogs
            </h1>
        </div>
        <div class="justify-center flex flex-wrap mt-4 mx-auto">

            @include('components.blog-card', ['blogs'=>$blogs]);

        </div>
        <a class="mt-20 bg-green-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow"
           href="
                @if (\Illuminate\Support\Facades\Auth::user())
                    /blogs/create
                @else
                    /login
                @endif
                ">
            @if (\Illuminate\Support\Facades\Auth::user())
                Post
            @else
                Login to post
            @endif
        </a>
    </div>
@stop
