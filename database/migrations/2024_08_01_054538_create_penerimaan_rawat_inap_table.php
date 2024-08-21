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
        Schema::create('penerimaan_rawat_inap', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rawat_inap_id');
            $table->string('jenis_ruangan');
            $table->string('kelas');
            $table->string('tgl_masuk');
            $table->string('jam_masuk');
            $table->string('asal_pasien');
            $table->string('status_pasien');
            $table->string('biaya_perawatan');
            $table->timestamps();
            $table->foreign('rawat_inap_id')->references('id')->on('rawatinap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaan_rawat_inap');
    }
};
