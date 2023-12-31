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
        Schema::create('notulens', function (Blueprint $table) {
            $table->id('id_notulen');
            $table->integer('unit');
            $table->string('nama_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->time('waktu');
            $table->string('tempat');
            $table->text('isi');
            $table->enum('status_notulen',["aktif","nonaktif"]);
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
        Schema::dropIfExists('notulens');
    }
};
