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
        Schema::create('rawatjalan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->string('tgl_lahir');
            $table->text('alamat');
            $table->string('tlp');
            $table->string('agama');
            $table->enum('status',['Belum Menikah','Menikah'])->default('Belum Menikah');
            $table->string('pekerjaan');
            $table->string('nama_penganggun_jawab');
            $table->string('alamat_penangguna_jawab');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawatjalan_tabel');
    }
};
