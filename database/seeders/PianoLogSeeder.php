<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PianoLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('piano_logs')->insert([
            [
                'userid' => '1',
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ 第14番 op.27-2 第1楽章 嬰ハ短調 月光',
                // 'genre' => 'ピアノソナタ',
                // 'number' => '14',
                // 'opus' => 'op.27-2',
                // 'movement' => '1',
                // 'key' => '嬰ハ短調',
                // 'commonname' => '月光',
                'difficulty' => '3',
                'degree' => '8',
                'playingtime' => '5',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '1',
            ],
            [
                'userid' => '1',
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ 第14番 op.27-2 第2楽章 嬰ハ短調 月光',
                // 'genre' => 'ピアノソナタ',
                // 'number' => '14',
                // 'opus' => 'op.27-2',
                // 'movement' => '2',
                // 'key' => '変ニ長調',
                // 'commonname' => '月光',
                'difficulty' => '4',
                'degree' => '8',
                'playingtime' => '4',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '2',
            ],
            [
                'userid' => '1',
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光',
                // 'genre' => 'ピアノソナタ',
                // 'number' => '14',
                // 'opus' => '27-2',
                // 'movement' => '3',
                // 'key' => '嬰ハ短調',
                // 'commonname' => '月光',
                'difficulty' => '9',
                'degree' => '9',
                'playingtime' => '9',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '3',
            ],
            [
                'userid' => '2',
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光',
                // 'genre' => 'ピアノソナタ',
                // 'number' => '14',
                // 'opus' => '27-2',
                // 'movement' => '3',
                // 'key' => '嬰ハ短調',
                // 'commonname' => '月光',
                'difficulty' => '8',
                'degree' => '9',
                'playingtime' => '8',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '3',
            ],
            [
                'userid' => '3',
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光',
                // 'genre' => 'ピアノソナタ',
                // 'number' => '14',
                // 'opus' => '27-2',
                // 'movement' => '3',
                // 'key' => '嬰ハ短調',
                // 'commonname' => '月光',
                'difficulty' => '9',
                'degree' => '9',
                'playingtime' => '8',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '3',
            ],
            [
                'userid' => '1',
                'composer' => 'ショパン',
                'song' => 'バラード1番 op.23 ト短調',
                // 'genre' => 'バラード',
                // 'number' => '1',
                // 'opus' => '23',
                // 'movement' => '',
                // 'key' => 'ト短調',
                // 'commonname' => 'バラード1番',
                'difficulty' => '10',
                'degree' => '9',
                'playingtime' => '10',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '1',
                'song_id' => '5',
            ],
            [
                'userid' => '1',
                'composer' => 'シューマン',
                'song' => '謝肉祭 op.9 キアリーナ',
                // 'genre' => '小曲集',
                // 'number' => '',
                // 'opus' => '9',
                // 'movement' => '11',
                // 'key' => 'ト短調',
                // 'commonname' => 'キアリーナ',
                'difficulty' => '5',
                'degree' => '9',
                'playingtime' => '2',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '3',
                'song_id' => '4',
            ],
        ]);

    }
}
