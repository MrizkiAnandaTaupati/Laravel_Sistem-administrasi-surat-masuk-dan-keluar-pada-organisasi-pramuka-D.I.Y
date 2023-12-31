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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id('id_surat_masuk');
            $table->string('no_surat');
            $table->enum('klasifikasi', ['Rahasia','Terbatas','Biasa']);
            $table->enum('sifat_surat', ['Sangat Segera','Segera','Biasa']);
            $table->string('asal_surat');
            $table->date('tanggal');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('file_surat_masuk');
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
        Schema::dropIfExists('surat_masuks');
    }
};
