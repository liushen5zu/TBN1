<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content')->comment('评论内容');
            $table->integer('user_id')->comment('评论人id');
            $table->string('activity_id')->comment('活动id');
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
        Schema::dropIfExists('activity_comments');
    }
}
