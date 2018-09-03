<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageMovieDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_movie_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('图片名');
            $table->string('image')->comment('图片');
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
        Schema::dropIfExists('image_movie_details');
    }
}
