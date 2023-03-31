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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('username', 20); // ユーザーネーム
            $table->string('userid', 255); // ユーザーID ⇒ 追加
            $table->string('email', 255); // メールアドレス
            // $table->tinyInteger('age'); // 年齢
            $table->tinyInteger('age'); // unsigned属性を追加
            $table->tinyInteger('gender'); // 性別
            $table->tinyInteger('pstartage'); // ピアノ開始年齢
            $table->tinyInteger('totalhistory'); // 通算演奏歴
            $table->boolean('pianohon'); // ピアノ所持
            $table->boolean('soundproofhon'); // 防音室所持
            // $table->boolean('communityhon'); // 所属コミュニティ有無
            $table->string('community', 255)->nullable(); // 所属コミュニティ有無
            $table->timestamps();
            // 以下に外部キーを挿入する。
            $table->unsignedBigInteger('age_id');
            $table->foreign('age_id')->references('id')->on('ages');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
};
