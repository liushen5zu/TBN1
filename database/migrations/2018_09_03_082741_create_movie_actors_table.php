<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('演员名');
            $table->string('sex')->comment('性别');
            $table->string('date')->comment('出生日期');
            $table->string('work')->comment('职业');
            $table->string('EnglishName')->comment('外文名');
            $table->string('ChinaName')->comment('中文名');
            $table->string('familyMember')->comment('家庭成员');
            $table->text('actor_into')->comment('影人简介');
            $table->text('winning')->comment('获奖情况');
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
        Schema::dropIfExists('movie_actors');
    }
}
