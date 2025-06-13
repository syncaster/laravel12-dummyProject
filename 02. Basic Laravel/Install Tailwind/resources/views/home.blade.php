<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
    <a href="{{ url('home') }}">Home</a>
    <a href="{{ url('blog') }}">Blog</a>
    <a href="{{ url('about') }}">About</a>

    <h1 class="text-3xl font-bold underline">
        Ini halaman Home
    </h1>
</body>
</html>