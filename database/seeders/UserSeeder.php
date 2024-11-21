<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'najwaafifah',
                'email' => 'najwa@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'name' => 'billieeilish',
                'email' => 'eilish@gmail.com',
                'password' => Hash::make('4321'),
            ],
            [
                'name' => 'zazaaja',
                'email' => 'zazaaja@gmail.com',
                'password' => Hash::make('3456'),
            ],
            [
                'name' => 'ellyzha',
                'email' => 'ellyzha@gmail.com',
                'password' => Hash::make('2345'),
            ],
            [
                'name' => 'dojacat',
                'email' => 'dojacat@gmail.com',
                'password' => Hash::make('6543'),
            ],
        ]);
    }
}
