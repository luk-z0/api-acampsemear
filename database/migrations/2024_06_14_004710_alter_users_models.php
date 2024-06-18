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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('achivement_id')->nullable();
            $table->foreign('achivement_id')->references('id')->on('achivements');
        });
        Schema::table('subscribe_models', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscribe_models', function (Blueprint $table) {
            $table->dropForeign('subscribe_models_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_achivement_id_foreign');
            $table->dropColumn('achivement_id');
        });
    }
};
