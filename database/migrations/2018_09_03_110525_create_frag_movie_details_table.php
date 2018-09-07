<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFragMovieDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frag_movie_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('片段名');
            $table->string('frag')->comment('片段');
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
        Schema::dropIfExists('frag_movie_details');
    }
}
