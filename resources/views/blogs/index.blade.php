<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title> {{config('app.name', 'Blog Page')}} </title>
</head>
<body>

    <div class="justify-center items-center flex flex-wrap h-screen">
        <div class="w-3/4 text-center justify-center items-center flex flex-wrap">
            <h1 class="p-6 font-bold text-7xl">
                Blogs
            </h1>
            <div class="justify-center flex flex-wrap mt-4">
                @foreach($blogs as $blog)
                    <div class="bg-gray-200 p-4 border-black border-2
                                w-52 w-52
                                mx-8 my-4">
                        <h2 class="text-2xl"> {{ $blog->title }} </h2>

                        <p> {{ substr($blog->body,0,50)  }}... </p>
                        <button class="bg-blue-700 text-white text-xl p-2 mt-3 rounded-2xl">
                            <a href="/blogs/{{$blog->id}}}">
                                View
                            </a>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</body>
</html>
