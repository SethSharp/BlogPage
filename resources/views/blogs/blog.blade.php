<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{config('app.name', 'Blog Page')}} </title>
</head>
<body>
    <h1> Title: {{$title}} </h1>
    <p> {{$body}} </p>
    {{-- Good place for a component when we come to it --}}
    <ul>
        @foreach($comments as $comment)
            <li> {{$comment->comment}} </li>
        @endforeach
    </ul>
</body>
</html>
