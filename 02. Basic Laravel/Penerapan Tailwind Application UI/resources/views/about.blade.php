<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    {{-- gunakan ini jika css langsung dari view about.blade.php --}}
    {{-- <style>
        body{
            background-color: lightgreen;
            font-family: Arial, sans-serif;
            color: #333
        }
        h1{
            text-align: center;
            margin-top: 50px;
        }
    </style> --}}

    {{-- gunakan ini jika css dari file style.css yang ada di folder public/css/ --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
</head>
<body>
    <a href="{{ url('home') }}">Home</a>
    <a href="{{ url('blog') }}">Blog</a>
    <a href="{{ url('about') }}">About</a>
    <h1>Ini halaman About</h1>

    <p>Nama: {{ $nama }}</p>
    <p>NIDN: {{ $nidn }}</p>
    <p>Matakuliah: {{ $matakuliah }}</p>
    <p>Framework: {{ $framework }}</p>

    <img src="/img/laravel-logo.png" alt="Laravel 12" style="width: 400px; height: 200px">
</body>
</html>