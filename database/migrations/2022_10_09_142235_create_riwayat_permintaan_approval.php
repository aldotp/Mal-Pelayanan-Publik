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
        Schema::create('riwayat_permintaan_approval', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_opd');
            $table->timestamps();
        });

        Schema::table('riwayat_permintaan_approval', function($table) {
            $table->foreign('id_user_opd')->references('id')->on('user_opd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_permintaan_approval');
    }
};
