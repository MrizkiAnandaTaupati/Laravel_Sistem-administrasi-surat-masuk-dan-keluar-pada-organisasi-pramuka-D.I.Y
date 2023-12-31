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
        Schema::create('sekretaris', function (Blueprint $table) {
            $table->id('id_sekretaris');
            $table->string('username_sekretaris');
            $table->string('password_sekretaris');
            $table->string('nama_sekretaris');
            $table->string('email_sekretaris');
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
        Schema::dropIfExists('sekretaris');
    }
};
