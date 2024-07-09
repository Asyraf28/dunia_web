<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Budiono Siregar',
                'email' => 'kapallaut@gmail.com',
                'password' => Hash::make('bangau123'),
            ],

        ]);
    }
}
