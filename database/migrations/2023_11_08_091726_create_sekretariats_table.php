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
        Schema::create('sekretariats', function (Blueprint $table) {
            $table->id('id_sekretariat');
            $table->string('username_sekretariat');
            $table->string('password_sekretariat');
            $table->string('nama_sekretariat');
            $table->string('email_sekretariat');
            $table->enum('status_sekretariat',['aktif','nonaktif']);
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
        Schema::dropIfExists('sekretariats');
    }
};
