<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'てすとa',
                'userid' => 'aaa',
                'email' => 'test@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'username' => 'てすと1',
                'userid' => '1',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'username' => 'てすと2',
                'userid' => '2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123')
            ],
            [
                'username' => 'てすと3',
                'userid' => '3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123')
            ],
        ]);
    }
}
