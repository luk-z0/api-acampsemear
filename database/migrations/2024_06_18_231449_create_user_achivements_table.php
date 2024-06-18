<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_achivements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('achivement_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('achivement_id')->references('id')->on('achivements');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_achivement_id_foreign');
            $table->dropColumn('achivement_id');
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
            $table->unsignedBigInteger('achivement_id');
            $table->foreign('achivement_id')->references('id')->on('achivements');
        });

        Schema::dropIfExists('user_achivements');
    }
};
