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
        Schema::table('support_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('support_motivations_id')->after('email');
            $table->foreign('support_motivations_id')->references('id')->on('support_motivations');
            $table->dropColumn('motivation');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('support_contacts', function (Blueprint $table) {
            $table->integer('motivation');
            $table->dropForeign('support_contacts_support_motivations_id_foreign');
        });
    }
};
