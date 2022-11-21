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
            $table->string('upload')->nullable();
            $table->unsignedBigInteger('status')->default(0);; // 0 pengajuan, 1 appove, 2 delete
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_syarat_layanan');

            $table->timestamps();
        });

        Schema::table('riwayat_permintaan_layanan', function($table) {
            $table->foreign('id_layanan')->references('id')->on('layanan');
            $table->foreign('id_syarat_layanan')->references('id')->on('syarat_layanan');
            $table->foreign('id_user')->references('id')->on('users');
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
