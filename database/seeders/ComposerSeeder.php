<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('composers')->insert([
            [
                'composer' => 'ショパン',
                'created_at' => Now()
            ],
            [
                'age' => 'ベートーヴェン',
                'created_at' => Now()
            ],
            [
                'age' => 'シューマン',
                'created_at' => Now()
            ],
            [
                'age' => 'ドビュッシー',
                'created_at' => Now()
            ],
        ]);
    }
}
