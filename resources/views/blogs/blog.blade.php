@extends('layouts.app')

@if(\Illuminate\Support\Facades\Auth::user())
    @section('content')
    <div class="px-32">
        <h1 class="py-5 font-bold text-7xl">
            {{$blog->title}}
        </h1>
        <h2> User: {{$blog->getUser($blog->user_id)}} </h2>
        <p class="py-12"> {{$blog->body}} </p>
        @if(\Illuminate\Support\Facades\Auth::user()->id == $blog->user_id)
            <a href="/blogs/update/{{$blog->id}}" class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Update
            </a>
        @endif

    </div>


    {{-- Good place for a component when we come to it --}}
    <div class="bg-gray-200 px-32 py-6">
        <h1 class="py-5 font-bold text-3xl">
            Comments
        </h1>
        <a href="/comments/create/{{$blog->id}}" class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Add comment
        </a>
        <ul class="">
            @foreach($comments as $comment)
                <li>
                    <div class="border-gray-700 border-2 rounded-3xl bg-gray-50 p-5 my-4">
                        <a
                            @if(\Illuminate\Support\Facades\Auth::user()->id == $comment->user_id)
                                href="/comments/{{$comment->id}}"
                            @endif
                                href=""
                            >
                            <p>
                                {{$comment->comment}}
                            </p>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    @stop
@endif
