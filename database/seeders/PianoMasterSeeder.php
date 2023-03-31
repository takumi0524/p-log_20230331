<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PianoMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianomasters')->insert([
            [
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ',
                'genre' => 'ピアノソナタ',
                'number' => '14',
                'opus' => 'op.27-2',
                'movement' => '1',
                'key' => '嬰ハ短調',
                'commonname' => '月光',
                'playingtime' => '5',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '1',
            ],
            [
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ',
                'genre' => 'ピアノソナタ',
                'number' => '14',
                'opus' => 'op.27-2',
                'movement' => '2',
                'key' => '変ニ長調',
                'commonname' => '月光',
                'playingtime' => '4',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '2',
            ],
            [
                'composer' => 'ベートーヴェン',
                'song' => 'ピアノソナタ第14番op.27-2',
                'genre' => 'ピアノソナタ',
                'number' => '14',
                'opus' => '27-2',
                'movement' => '3',
                'key' => '嬰ハ短調',
                'commonname' => '月光',
                'playingtime' => '9',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '2',
                'song_id' => '3',
            ],
            [
                'composer' => 'ショパン',
                'song' => 'バラード1番',
                'genre' => 'バラード',
                'number' => '1',
                'opus' => '23',
                'movement' => '',
                'key' => 'ト短調',
                'commonname' => 'バラード1番',
                'playingtime' => '10',
                'created_at' => Now(),
                'updated_at' => Now(),
                'composer_id' => '1',
                'song_id' => '5',
            ],          
            
            [
            'composer' => 'シューマン',
            'song' => '謝肉祭op.9キアリーナ',
            'genre' => '小曲集',
            'number' => '',
            'opus' => '9',
            'movement' => '11',
            'key' => 'ト短調',
            'commonname' => 'キアリーナ',
            'playingtime' => '2',
            'created_at' => Now(),
            'updated_at' => Now(),
            'composer_id' => '3',
            'song_id' => '4',
            ]
        ]);
    }
}
