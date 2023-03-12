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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nidn');
            $table->string('nama_dosen');
            $table->string('no_hp');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->date('tanggal_sk')->nullable();
            $table->string('file_sk')->nullable();
            $table->enum('jaban', ['Ketua Jurusan', 'Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar']);
            $table->enum('kepangkatan', [
                'III A',
                'III B',
                'III C',
                'IV A',
                'IV B',
                'IV C',
                'IV D',
                'IV E',
            ]);
            $table->enum('status', ['Aktif', 'Pensiun']);
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
        Schema::dropIfExists('dosen');
    }
};
