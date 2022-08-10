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
            {{$title}}
        </h1>
        <p class="py-12"> {{$body}} </p>
    </div>


    {{-- Good place for a component when we come to it --}}
    <div class="bg-gray-200 px-32 py-6">
        <h1 class="py-5 font-bold text-3xl">
            Comments
        </h1>
        <ul class="">
            @foreach($comments as $comment)
                <li>
                    <div class="border-gray-700 border-2 rounded-3xl bg-gray-50
                                p-5 my-4">
                        {{$comment->comment}}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
