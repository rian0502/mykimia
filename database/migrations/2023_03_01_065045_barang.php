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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('jumlah_akhir');
            $table->foreignId('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_model')->references('id')->on('model_barang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_lokasi')->references('id')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('barang');
    }
};
