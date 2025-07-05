<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use DateTime;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //     'slug' => 'berita-update',
        //     'judul' => 'Berita Update',
        //     'penulis' => 'Saiful NB',
        //     'isi_postingan' => 'Data ini di load dari database',
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ]);

        // DB::table('posts')->insert([
        //     'slug' => 'berita-trending',
        //     'judul' => 'Berita Trending',
        //     'penulis' => 'Admin',
        //     'isi_postingan' => 'Berita trending minggu ini',
        //     'created_at' => new DateTime(),
        //     'updated_at' => new DateTime(),
        // ]);

        $post = new Posts;
        $post->slug = 'pengumuman-ujian skripsi';
        $post->judul= 'Pengumuman Ujian';
        $post->penulis = 'Admin';
        $post->isi_postingan = 'Jadwal ujian dimulai minggu depan';
        $post->created_at = new DateTime();
        $post->updated_at = new DateTime();
        $post->save();


    }
}
