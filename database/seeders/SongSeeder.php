<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('songs')->insert([
            [
                'song' => 'ピアノソナタ 第14番 op.27-2 第1楽章 嬰ハ短調 月光',
                'created_at' => Now()
            ],
            [
                'song' => 'ピアノソナタ 第14番 op.27-2 第2楽章 嬰ハ短調 月光',
                'created_at' => Now()
            ],
            [
                'song' => 'ピアノソナタ 第14番 op.27-2 第3楽章 嬰ハ短調 月光',
                'created_at' => Now()
            ],
            [
                'song' => '謝肉祭 op.9 キアリーナ',
                'created_at' => Now()
            ],
            [
                'song' => '謝肉祭 op.9 前口上',
                'created_at' => Now()
            ],
            [
                'song' => '謝肉祭 op.9 フロレスタン',
                'created_at' => Now()
            ],
            [
                'song' => '謝肉祭 op.9 高貴なワルツ',
                'created_at' => Now()
            ],
            [
                'song' => 'バラード1番 op.23 ト短調',
                'created_at' => Now()
            ],
            [
                'song' => 'バラード2番 op.38 ヘ短調',
                'created_at' => Now()
            ],
            [
                'song' => 'バラード3番 op.47 変イ長調',
                'created_at' => Now()
            ],
            [
                'song' => 'バラード4番 op.52 ヘ短調',
                'created_at' => Now()
            ],
            [
                'song' => 'ピアノソナタ 第2番 op.22 第1楽章',
                'created_at' => Now()
            ],
            [
                'song' => 'ピアノソナタ 第2番 op.22 第2楽章',
                'created_at' => Now()
            ],
            [
                'song' => 'ピアノソナタ 第2番 op.22 第3楽章',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 グラドゥス・アド・パルナッスム博士',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 象の子守歌',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 人形のセレナード',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 雪は踊っている',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 小さな羊飼い',
                'created_at' => Now()
            ],
            [
                'song' => '子供の領分 ゴリウォーグのケークウォーク',
                'created_at' => Now()
            ],
        ]);
    }
}
