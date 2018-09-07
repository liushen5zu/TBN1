<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('导演名');
            $table->string('sex')->comment('性别');
            $table->string('date')->comment('出生日期');
            $table->string('place')->comment('出生地');
            $table->string('work')->comment('职业');
            $table->string('ChinaName')->comment('中文名');
            $table->text('director_intro')->comment('影人简介');
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
        Schema::dropIfExists('director_names');
    }
}
