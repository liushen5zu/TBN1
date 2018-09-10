<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlDetailMovieDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('al_detail_movie_detail', function (Blueprint $table) {
            $table->integer('al_detail_id')->comment('影集ID');
            $table->integer('movie_detail_id')->comment('电影id');
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
        Schema::dropIfExists('al_detail_movie_detail');
    }
}
