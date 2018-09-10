<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('回复内容');
            $table->integer('user_id')->comment('回复用户id');
            $table->integer('review_id')->comment('回复评论id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.1
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
