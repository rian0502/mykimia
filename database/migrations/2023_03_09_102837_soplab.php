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
        Schema::create('sop_lab', function (Blueprint $table) {
            $table->id();
            $table->string('encrypt_id')->unique()->nullable();
            $table->foreignId('id_lokasi')->references('id')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('file_sop');
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
        Schema::dropIfExists('sop_lab');
    }
};
