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
        //
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->date('tanggal_sk');
            $table->string('berkas_sk');
            $table->string('alamat');
            $table->string('no_hp');
            $table->foreignId('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        //
        Schema::dropIfExists('admin');
    }
};