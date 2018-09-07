<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('star')->comment('星级数');
            $table->string('title')->comment('影评标题');
            $table->text('content')->comment('影评内容');
            $table->integer('movie_detail_id')->comment('电影id');
            $table->integer('user_id')->comment('用户id');
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
        Schema::dropIfExists('movie_comments');
    }
}
