<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Arr;

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
    return view('blog.blog', ['title' => 'Blog', 'postingan' => [
        [
            'id' => 1,
            'slug' => 'berita-terbaru',
            'judul' => 'Berita Terbaru',
            'penulis' => 'Saiful NB',
            'isi_postingan' => 'Ini contoh data berita 
            terbaru dari routing /blog'
            
        ],
        [
            'id' => 2,
            'slug' => 'berita-sebelumnya',
            'judul' => 'Berita Sebelumnya',
            'penulis' => 'Admin',
            'isi_postingan' => 'Ini contoh data yang ditulis admin 
            pada berita lama dari routing /blog'
        ]
    ]   
    ]);
});

Route::get('/blog/{slug}', function($slug){
   $postingan = [
    [
        'id' => 1,
        'slug' => 'berita-terbaru',
        'judul' => 'Berita Terbaru',
        'penulis' => 'Saiful NB',
        'isi_postingan' => 'Ini contoh data berita 
        terbaru dari routing /blog'
        
    ],
    [
        'id' => 2,
        'slug' => 'berita-sebelumnya',
        'judul' => 'Berita Sebelumnya',
        'penulis' => 'Admin',
        'isi_postingan' => 'Ini contoh data yang ditulis admin 
        pada berita lama dari routing /blog'
    ]
   ];

   $post = Arr::first($postingan, function($post) use ($slug) {
        return $post['slug'] == $slug;
   });

   //dd($post);
   return view('blog.post', ['title' => 'Post', 'post' => $post]);

});

