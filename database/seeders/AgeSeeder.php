<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ages')->insert([
            [
                'age' => '0～5歳',
                'created_at' => Now()
            ],
            [
                'age' => '6～9歳',
                'created_at' => Now()
            ],
            [
                'age' => '10～14歳',
                'created_at' => Now()
            ],
            [
                'age' => '15～18歳',
                'created_at' => Now()
            ],
            [
                'age' => '19～22歳',
                'created_at' => Now()
            ],
            [
                'age' => '23～30歳',
                'created_at' => Now()
            ],
            [
                'age' => '31～40歳',
                'created_at' => Now()
            ],
            [
                'age' => '41～50歳',
                'created_at' => Now()
            ],
            [
                'age' => '51～60歳',
                'created_at' => Now()
            ],
            [
                'age' => '61歳～',
                'created_at' => Now()
            ],
        ]);
    }
}