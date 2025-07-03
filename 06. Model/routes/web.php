<?php

use App\Models\Artikel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

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
        'title' => 'Blog',
        'postingan' => Artikel::all()
    ]);
});

Route::get('/blog/{slug}', function($slug){
   
   $post = Artikel::find($slug);

   //dd($post);
   return view('blog.post', ['title' => 'Post', 'post' => $post]);

});
