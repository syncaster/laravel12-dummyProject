<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'ini adalah halaman home';
});

Route::get('/home', function(){
    return view('home');
});

Route::get('home/product/{id}', [HomeController::class, 'product']);

Route::get('/about', function(){
    return view('about',[
        'nama' => 'Saiful NB',
        'nidn' => '0710028805',
        'matakuliah' => 'Pemrograman Web Lanjut',
        'framework' => 'Laravel 12',
    ]);
});

Route::get('/blog', function(){
    return view('blog.blog');
});