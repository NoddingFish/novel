<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->index();
            $table->string('desc', 255);
            $table->string('author', 16);
            $table->string('novel_type', 16);//小说类型
            $table->string('tags', 255);//小说标签
            $table->string('url', 255);//爬虫原链接
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
        Schema::dropIfExists('novels');
    }
}
