<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('sex')->comment('1代表男2代表女')->default('1');
            $table->string('birthday')->comment('生日');
            $table->string('location')->comment('所在地');
            $table->string('locations')->comment('收获地址');
            $table->string('pc')->comment('邮编');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('location');
            $table->dropColumn('locations');
            $table->dropColumn('pc');
        });
    }
}
