@extends('layouts.app')

@section('content')
<div style="width: 900px;" class="max-w-full mx-auto pt-4">
    <form method="POST" action="/comments/create/{{$blog_id}}">
        @method('POST')
        @csrf
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="comment"> Comment: </label>
            <input class="h-10 bg-white border border-2 border-gray-300 rounded py-4 px-3 mr-4 w-full
                              text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="comment"
                   name="comment"value="">
        </div>
        <button class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Add
        </button>
    </form>
</div>
@stop
