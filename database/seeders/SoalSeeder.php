<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    public function run()
    {
        $soal = [
            ['id' => 'lv1_1a', 'jawaban' => '<h2>Dunia Web</h2>'],
            ['id' => 'lv1_1b', 'jawaban' => '<head>Dunia Web</head>'],
            ['id' => 'lv1_1c', 'jawaban' => '<h1>Dunia Web</h1>'],
            ['id' => 'lv1_1d', 'jawaban' => '<p>Dunia Web<p>'],
            ['id' => 'lv1_2a', 'jawaban' => '<h1><p>Hello'],
            ['id' => 'lv1_2b', 'jawaban' => '<b><p>Hello'],
            ['id' => 'lv1_2c', 'jawaban' => '<b><a>Hello'],
            ['id' => 'lv1_2d', 'jawaban' => '<p><b>Hello'],
            ['id' => 'lv1_3a', 'jawaban' => '<h2>Selamat Datang'],
            ['id' => 'lv1_3b', 'jawaban' => '<p>Selamat Datang'],
            ['id' => 'lv1_3c', 'jawaban' => '<b>Selamat Datang'],
            ['id' => 'lv1_3d', 'jawaban' => '<a>Selamat Datang'],
            ['id' => 'lv1_4a', 'jawaban' => 'ketahui isinya</p></b>'],
            ['id' => 'lv1_4b', 'jawaban' => 'ketahui isinya</p>'],
            ['id' => 'lv1_4c', 'jawaban' => 'ketahui isinya<p>'],
            ['id' => 'lv1_4d', 'jawaban' => 'ketahui isinya</b><p>'],
        ];

        DB::table('soal')->insert($soal);
    }
}