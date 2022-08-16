@extends('layouts.app')

@section('content')
{{--{{dd($comment)}}--}}
<div style="width: 900px;" class="max-w-full mx-auto pt-4">
    <form method="POST" action="/comments/{{$comment->id}}">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="comment"> Comment: </label>
            <input class="h-10 bg-white border border-2 border-gray-300 rounded py-4 px-3 mr-4 w-full
                              text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="comment"
                   name="comment"value="{{$comment->comment}}">
        </div>

        <button class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Update
        </button>

    </form>
    <form method="POST" action="/comments/{{$comment->id}}">
        @csrf
        @method('DELETE')
        <button class="bg-red-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Delete
        </button>
    </form>
</div>
@stop
