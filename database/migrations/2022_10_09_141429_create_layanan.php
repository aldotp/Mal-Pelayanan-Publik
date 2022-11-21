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

        Schema::create('syarat_layanan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
        });

        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            // $table->unsignedBigInteger('syarat_layanan');
            $table->unsignedBigInteger('id_opd')->nullable();
            $table->timestamps();
        });

        Schema::table('layanan', function($table) {
            $table->foreign('id_opd')->references('id')->on('opd')->onDelete('set null');
            // $table->foreign('syarat_layanan')->references('id')->on('syarat_layanan');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syarat_layanan');
        Schema::dropIfExists('layanan');
    }
};
