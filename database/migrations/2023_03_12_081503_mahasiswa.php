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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('npm');
            $table->string('nama_mahasiswa');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('no_hp');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_masuk');
            $table->string('angkatan');
            $table->string('semester');
            $table->enum('status', ['Aktif', 'Alumni', 'Drop Out', 'Cuti']);
            $table->foreignId('id_dosen')->constrained('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mahasiswa');
    }
};
