<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('al_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_detail_id')->comment('电影id');
            $table->integer('al_detail_id')->comment('影集id');
            $table->integer('image')->comment('电影图片');
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
        Schema::dropIfExists('al_movies');
    }
}
