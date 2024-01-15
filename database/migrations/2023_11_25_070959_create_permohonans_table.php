<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('namaKapal')->nullable();
            $table->string('jenisKapal')->nullable();
            $table->string('jenisLayanan')->nullable();
            $table->string('ditujukan')->nullable();
            $table->string('nomor')->nullable();
            $table->string('tanggalSurat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('gt')->nullable();
            $table->string('callSign')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('file_suratPermohoan')->nullable();
            $table->string('file_ukurKapal')->nullable();
            $table->string('file_stkk')->nullable();
            $table->string('file_pelengkapan')->nullable();
            $table->string('file_konstruksi')->nullable();
            $table->string('file_radio')->nullable();
            $table->string('file_klassifikasi')->nullable();
            $table->string('file_ilr_pmk')->nullable();
            $table->string('file_pemeriksaan')->nullable();
            $table->string('file_docking1')->nullable();
            $table->string('file_docking2')->nullable();
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
        Schema::dropIfExists('permohonans');
    }
}
