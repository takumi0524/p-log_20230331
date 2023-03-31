<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_piano_logs', function (Blueprint $table) {
            $table->id();
            $table->string('userid', 255); // ユーザーID ⇒ 追加
            $table->string('composer', 255); // 作曲家
            $table->string('song', 255); // 曲名
            $table->string('genre', 255); // ジャンル
            $table->string('number', 255); // ナンバー
            $table->string('opus', 255); // 作品番号
            $table->string('movement', 255); // 楽章
            $table->string('key', 255); // 調性
            $table->string('commonname', 255); // 通称
            $table->tinyInteger('difficulty'); // 難易度
            $table->tinyInteger('degree'); // 度数
            $table->tinyInteger('playingtime'); // 演奏時間(リピート有)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_piano_logs');
    }
};
