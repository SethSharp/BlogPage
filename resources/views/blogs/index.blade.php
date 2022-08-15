<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title> {{config('app.name', 'Blog Page')}} </title>
</head>
<body>

    <div class="justify-center items-center text-center h-screen">
        <div class="text-center justify-center items-center">
            <h1 class="p-6 font-bold text-7xl">
                Blogs
            </h1>
        </div>
        <div class="justify-center flex flex-wrap mt-4 mx-auto">
            @foreach($blogs as $blog)
                <div class="bg-gray-200 p-4 border-black border-2
                                w-52 w-52
                                mx-8 my-4">
                    <h2 class="text-2xl"> {{ $blog->title }} </h2>

                    <p> {{ substr($blog->body,0,50)  }}... </p>
                    <button class="bg-blue-700 text-white text-xl p-2 mt-3 rounded-2xl">
                        <a href="{{route('blogs.get', $blog->id)}}">
                            View
                        </a>
                    </button>
                </div>
            @endforeach
        </div>
        <a href="/blogs/create" class="mt-20 bg-green-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
            Create
        </a>
    </div>
</body>
</html>
