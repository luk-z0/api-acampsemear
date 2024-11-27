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
        Schema::create('subscribe_models', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone', 15);
            $table->string('emergency_phone', 15);
            $table->string('date_birth', 8);
            $table->string('email', 150);
            $table->string('uf', 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::table('subscribe_models', function (Blueprint $table) {
            $table->dropForeign('subscribe_models_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('subscribe_models');
    }
};
