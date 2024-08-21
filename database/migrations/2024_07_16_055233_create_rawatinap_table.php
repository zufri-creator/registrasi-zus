<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rawatinap', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('pendaftaran_pasien_id');
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('poli_id');
            $table->unsignedBigInteger('pilihan_kamar_id');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->text('alamat');
            $table->string('no_rt');
            $table->string('no_rw');
            $table->string('kelurahan');
            $table->string('kota');
            $table->string('tlp');
            $table->string('pendidikan');
            $table->enum('pekerjaan',['Belum Bekerja','Pegawai Negeri','Wiraswasta'])->default('Belum Bekerja');
            $table->timestamps();
            $table->foreign('pasien_id')->references('id')->on('pasien');
            $table->foreign('poli_id')->references('id')->on('poli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawatinap');
    }
};
