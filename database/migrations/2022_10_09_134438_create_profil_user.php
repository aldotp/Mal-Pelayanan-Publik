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
        Schema::create('profil_user', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
        });

        // DB::statement("ALTER TABLE profil_User MODIFY COLUMN id_user bigint(20) auto_increment;");

        Schema::table('profil_user', function($table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_user');
    }
};
