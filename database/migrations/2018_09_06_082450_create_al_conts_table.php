<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlContsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('al_conts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aldetail_id')->comment('影集id');
            $table->integer('moviedetail_id')->comment('电影id');
            $table->text('recommend')->commend('推荐理由');
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
        Schema::dropIfExists('al_conts');
    }
}
