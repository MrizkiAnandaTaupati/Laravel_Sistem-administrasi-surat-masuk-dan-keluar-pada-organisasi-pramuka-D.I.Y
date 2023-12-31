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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id('id_surat_keluar');
            $table->string('no_surat');
            $table->enum('jenis_surat',['Surat Umum/Edaran','Surat Undangan','Surat Tugas','Surat Kuasa','Surat Izin','Surat Keterangan','Surat Perjalanan Dinas','Surat Pengantar','Surat Panggilan','Surat Rekomendasi','Surat Pengumuman','Nota Dinas']);
            $table->enum('sifat_surat',['Rahasia','Terbatas','Biasa']);
            $table->string('pengirim');
            $table->string('tujuan');
            $table->string('perihal');
            $table->string('isi_surat');
            $table->date('tanggal');
            $table->enum('status_surat',['Diolah','Disetujui']);
            $table->enum('kelas',['aktif','nonaktif']);
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
        Schema::dropIfExists('surat_keluars');
    }
};
