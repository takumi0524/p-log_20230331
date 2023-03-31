<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PstartageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pstartages')->insert([
            [
                'pstartage' => '0～5歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '6～9歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '10～14歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '15～18歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '19～22歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '23～30歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '31～40歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '41～50歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '51～60歳',
                'created_at' => Now()
            ],
            [
                'pstartage' => '61歳～',
                'created_at' => Now()
            ],
        ]);
    }
}
