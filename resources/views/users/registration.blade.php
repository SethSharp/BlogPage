<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title> {{config('app.name', 'Blog Page')}} </title>
</head>
<body>


    <div class="w-20 bg-gray-500">
        <form method="POST" action="/register">
            @method('POST')
            @csrf
            <div class="mb-4 bg-emerald-700">
                <label class="font-bold text-gray-800" for="name"> Name: </label>
                <br>
                <input class="h-10 bg-white border border-2 border-gray-300 rounded py-4 px-3 mr-4 w-1/2
                                  text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="name"
                       name="name" value="">
            </div>
            <button class="bg-blue-500 text-white tracking-wide px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Register
            </button>
        </form>
    </div>
</body>
</html>
