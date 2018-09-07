<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('电影名');
            $table->integer('director_name_id')->comment('导演id');
            $table->string('countries')->comment('国籍');
            $table->string('runningtime')->comment('时长');
            $table->integer('recom')->comment('推荐');
            $table->text('intro')->comment('剧情简介');
            $table->integer('num')->comment('评论数');
            $table->string('movie_cate_id')->comment('分类id');
            $table->string('image')->comment('电影图片');
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
        Schema::dropIfExists('movie_details');
    }
}
