<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title> {{config('app.name', 'Blog Page')}} </title>
</head>
<body>
    <div class="px-32">
        <h1 class="py-5 font-bold text-7xl">
            {{$blog->title}}
        </h1>
        <p class="py-12"> {{$blog->body}} </p>
        <a href="/blogs/update/{{$blog->id}}" class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Update
        </a>
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
                    <div class="border-gray-700 border-2 rounded-3xl bg-gray-50
                                p-5 my-4">
                        <a href="/comments/{{$comment->id}}">
                            <p>
                                {{$comment->comment}}
                            </p>
                        </a>



                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
