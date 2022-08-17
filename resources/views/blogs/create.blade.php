@extends('layouts.app')

@section('content')
<div style="width: 900px;" class="max-w-full mx-auto pt-4">
    @if(\Illuminate\Support\Facades\Auth::user())
        <form method="POST" action="/blogs/create/{{\Illuminate\Support\Facades\Auth::user()->id}}">
            @method('POST')
            @csrf
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title"> Title: </label>
                <input class="h-10 bg-white border border-2 border-gray-300 rounded py-4 px-3 mr-4 w-full
                              text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title"
                       name="title"value="">
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="body"> Body: </label>
                <textarea class="h-28 bg-white border border-2 border-gray-300 rounded py-4 px-3 mr-4 w-full
                              text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="body"
                          name="body" >  </textarea>
            </div>
            <button class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Add
            </button>
        </form>
    @else
        <p> You need to sign in </p>
    @endif

</div>
@stop
