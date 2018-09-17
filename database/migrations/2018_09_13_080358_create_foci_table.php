<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFociTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foci', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('关注人id');
            $table->string('user_username')->comment('关注人名');
            $table->integer('author_id')->comment('被关注人id');
            $table->string('author_username')->comment('被关注人名');
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
        Schema::dropIfExists('foci');
    }
}
