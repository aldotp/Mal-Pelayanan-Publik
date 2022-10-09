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
        Schema::create('riwayat_permintaan_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('perihal');
            $table->string('deskripsi');
            $table->unsignedBigInteger('id_layanan');
            $table->timestamps();
        });

        Schema::table('riwayat_permintaan_layanan', function($table) {
            $table->foreign('id_layanan')->references('id')->on('layanan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_permintaan_layanan');
    }
};
