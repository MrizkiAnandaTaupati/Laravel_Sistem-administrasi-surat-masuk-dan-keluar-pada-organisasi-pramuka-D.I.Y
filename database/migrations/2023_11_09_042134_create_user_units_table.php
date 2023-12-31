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
        Schema::create('user_units', function (Blueprint $table) {
            $table->id('id_user_unit');
            $table->integer('id_unit');
            $table->string('username_user');
            $table->string('password_user');
            $table->string('nama_user');
            $table->string('email_user');
            $table->enum('status_user',["aktif","nonaktif"]);
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
        Schema::dropIfExists('user_units');
    }
};
