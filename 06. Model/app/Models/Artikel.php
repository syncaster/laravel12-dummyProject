<?php

namespace App\Models;

use Illuminate\Support\Arr;

Class Artikel{
    public static function all(){
        return [
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
    } 

    public static function find($slug) : array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}
