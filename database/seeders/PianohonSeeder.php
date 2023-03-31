<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PianohonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianohons')->insert([
            [
                'pianohon' => 'グランドピアノ',
                'created_at' => Now()
            ],
            [
                'pianohon' => 'アップライトピアノ',
                'created_at' => Now()
            ],
            [
                'pianohon' => '電子ピアノ',
                'created_at' => Now()
            ],
            [
                'pianohon' => 'キーボードその他',
                'created_at' => Now()
            ],
            [
                'pianohon' => '所持なし',
                'created_at' => Now()
            ],
        ]);
    }
}
