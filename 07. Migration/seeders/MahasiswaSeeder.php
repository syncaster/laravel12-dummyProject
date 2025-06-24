<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('mahasiswa')->insert([
        //     'nama' => 'Tono',
        //     'prodi' => 'Teknik Informatika',
        //     'semester' => '5',
        //     'created_at' => new \DateTime,
        //     'updated_at' => new \DateTime,
        // ]);

        //  DB::table('mahasiswa')->insert([
        //     'nama' => 'Sisca',
        //     'prodi' => 'Teknik Informatika',
        //     'semester' => '5',
        //     'created_at' => new \DateTime,
        //     'updated_at' => new \DateTime,
        // ]);

         $mhs = new Mahasiswa;
         $mhs->nama = 'Ani';
         $mhs->prodi = 'Siskom';
         $mhs->semester = '5';
         $mhs->created_at = new \DateTime();
         $mhs->updated_at = new \DateTime();
         $mhs->save();
    }
}
