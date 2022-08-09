<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title> {{config('app.name', 'Blog Page')}} </title>
    </head>
    <body>

        <h1 class="bg-red-100"> My Blog Page </h1>
        <p> This project was undertaken to implement our newly established knowledge in
            DataBase design and configuration with Laravel and SQL. This site also
            implements Tailwind CSS to spice things up
        </p>
        <button> <a href="/blogs"> Go to Blogs </a> </button>
    </body>
</html>
