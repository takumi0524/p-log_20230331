<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TotalhistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('totalhistorys')->insert([
            [
                'totalhistory' => '～1年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '1～3年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '3～5年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '5～7年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '7～10年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '10～15年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '15～20年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '20～30年',
                'created_at' => Now()
            ],
            [
                'totalhistory' => '30年～',
                'created_at' => Now()
            ],
        ]);
    }
}
