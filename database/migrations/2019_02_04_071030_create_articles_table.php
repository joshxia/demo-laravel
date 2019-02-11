<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');// 主键 自增
            $table->string('title');
            $table->text('introduction'); // 文章简介
            $table->text('content');
            $table->timestamp('published_at'); // 文章发表时间
            $table->timestamps();// 自动创建的两个字段，created_at 和 updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
