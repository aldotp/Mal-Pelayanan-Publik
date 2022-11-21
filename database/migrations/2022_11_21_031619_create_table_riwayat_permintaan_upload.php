<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('riwayat_permintaan_upload', function (Blueprint $table) {
            // $table->id();
            $table->id('id_permintaan_layanan');
            $table->unsignedBigInteger('id_syarat_layanan');
            // $table->unsignedBigInteger("id_syarat_layanan");
            // $table->unsignedBigInteger("id_permintaan_layanan");
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('id_syarat_layanan')->references('id')->on('syarat_layanan');
            $table->foreign('id_permintaan_layanan')->references('id')->on('riwayat_permintaan_layanan');
        });
        // DB::update("ALTER TABLE riwayat_permintaan_upload MODIFY id_permintaan_layanan bigint(20) NOT NULL AUTO_INCREMENT");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_permintaan_upload');
    }
};
