<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            [
                'gender' => '男性',
                'created_at' => Now()
            ],
            [
                'gender' => '女性',
                'created_at' => Now()
            ],
            [
                'gender' => 'その他',
                'created_at' => Now()
            ],
        ]);
    }
}
