<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'ini adalah halaman home';
});

Route::get('/about', function(){
    return view('about');
});