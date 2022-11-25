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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pt');
            $table->string('nama_studio');
            $table->string('alamat');
            $table->string('tahun_berdiri');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('logo');
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
        Schema::dropIfExists('perusahaan');
    }
};
