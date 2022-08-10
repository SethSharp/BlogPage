<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title> {{config('app.name', 'Blog Page')}} </title>
    </head>
    <body>
        <div class="justify-center items-center flex py-32 h-screen">
            <div class="w-1/2 text-center justify-center items-center flex flex-wrap">
                <h1 class="p-6 font-bold text-7xl"> My
                    <strong class="text-amber-300"> Blog Page </strong>
                </h1>

                <p class="font-medium my-4 pb-4 px-32"> This project was undertaken to implement our newly established knowledge in
                    SQL Database design integrated with Laravel. As well as implementing
                    routes to easily navigate to different areas of the project. This site also
                    integrates Tailwind to <strong class="text-red-600"> spice </strong> things up
                </p>

                <button class="bg-blue-700 text-white text-xl p-3 rounded-3xl">
                    <a class="" href="{{route('blogs.index')}}"> My Blogs </a>
                </button>
            </div>
        </div>


    </body>
</html>
