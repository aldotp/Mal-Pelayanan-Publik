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
        Schema::create('opd', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip_kepala');
            $table->string('nama_kepala');
            $table->string('nama_pimpinan');
            $table->unsignedBigInteger('id_wilayah');
            $table->timestamps();
        });

        Schema::table('opd', function($table) {
            $table->foreign('id_wilayah')->references('id')->on('wilayah')->onDelete('set null');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opd');
    }
};
