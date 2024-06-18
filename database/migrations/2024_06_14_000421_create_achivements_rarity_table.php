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
        Schema::create('achivements_rarity', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('achivement_id');
            $table->integer('bonus_points');
            $table->string('name');
            $table->string('year');
            $table->timestamps();

            $table->foreign('achivement_id')->references('id')->on('achivements');
            $table->unique('achivement_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achivements_rarity');
    }
};
