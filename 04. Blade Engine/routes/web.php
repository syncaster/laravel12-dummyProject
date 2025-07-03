<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/products/{id}', [HomeController::class, 'products']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'Halaman About',
        'nama' => 'Saiful NB',
        'nidn' => '0710028805',
        'matakuliah' => 'Pemrograman Web Lanjut',
        'framework' => 'Laravel 12',
    ]);
});

Route::get('/home', function(){
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/blog', function () {
    return view('blog.blog', [
        'title' => 'Blog'
    ]);
});