<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NarasiSeeder extends Seeder
{
    public function run()
    {
        $narasi = [
            ['id' => 'lv1_1a', 'narasi' => 'Bukankah ini terlalu besar?!'],
            ['id' => 'lv1_1b', 'narasi' => 'Mungkin kau salah tag?'],
            ['id' => 'lv1_1c', 'narasi' => 'Kau benar, inilah nama duniaku!'],
            ['id' => 'lv1_1d', 'narasi' => 'Ini terlalu biasa untuk judul halaman!'],
            ['id' => 'lv1_1o', 'narasi' => 'Tunggu, sepertinya ini untuk membuat judul dunia ini. Kira-kira bagaimana ya cara membuatnya?'],
            ['id' => 'lv1_2a', 'narasi' => 'Kau tidak dapat menggabungkan tag tersebut!'],
            ['id' => 'lv1_2b', 'narasi' => 'Bukankah ini terbalik?'],
            ['id' => 'lv1_2c', 'narasi' => 'Kau membuat ini menjadi pintu'],
            ['id' => 'lv1_2d', 'narasi' => 'Tidak lupa dengan sapaan kepada orang lain'],
            ['id' => 'lv1_2o', 'narasi' => 'Eh, apakah dunia ini ingin menyapa? Sepertinya ia sangat semangat sampai membuatnya dengan tulisan tebal.'],
            ['id' => 'lv1_3a', 'narasi' => 'Tulisan ini terlalu besar!'],
            ['id' => 'lv1_3b', 'narasi' => 'Duniaku memang seharusnya selalu menyambut tamu'],
            ['id' => 'lv1_3c', 'narasi' => 'Elementnya menjadi tidak berbentuk'],
            ['id' => 'lv1_3d', 'narasi' => 'Lagi-lagi kita membuat pintu!'],
            ['id' => 'lv1_3o', 'narasi' => 'Hai ada tulisan disana!! Kira-kira tulisan apa itu?'],
            ['id' => 'lv1_4a', 'narasi' => 'Terlalu banyak menggunakan tag!'],
            ['id' => 'lv1_4b', 'narasi' => 'Banyak sekali hal misteri didunia ini!'],
            ['id' => 'lv1_4c', 'narasi' => 'Kau kurang teliti, ayo coba lagi!'],
            ['id' => 'lv1_4d', 'narasi' => 'Mungkin belum sesuai tagnya?'],
            ['id' => 'lv1_4o', 'narasi' => 'Sepertinya sama seperti sebelumnya. Apa itu tulisannya?'],
            ['id' => 'lv1_e1', 'narasi' => 'Ah sekarang aku ingat. Kita berada di Dunia Web'],
            ['id' => 'lv1_e2', 'narasi' => 'Tapi sepertinya masih banyak yang harus dijelajahi di dunia ini.'],
            ['id' => 'lv1_e3', 'narasi' => 'Mari kita pecahkan!!!'],
            ['id' => 'lv_o1', 'narasi' => 'Kamu terbangun ke dalam sebuah halaman kosong...'],
            ['id' => 'lv_o2', 'narasi' => 'Dari kejauhan, kamu melihat seorang wanita berkacamata mendekatimu...'],
            ['id' => 'lv_o3', 'narasi' => 'Hai, apa kamu tidak apa-apa?'],
            ['id' => 'lv_o4', 'narasi' => 'Sepertinya kamu bukan orang sini'],
            ['id' => 'lv_o5', 'narasi' => 'Kalau kamu penasaran, kita sekarang ada di....\r\nHmmm.....'],
            ['id' => 'lv_o6', 'narasi' => 'Maaf aku melupakannya, maukah kamu bantu aku untuk mengingat tempat ini bersama?'],
        ];

        foreach ($narasi as $entry) {
            DB::connection('sqlite')->table('narasi')->insert($entry);
        }
    }
}