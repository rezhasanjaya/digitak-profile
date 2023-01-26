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
            $table->foreignId('edited_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('edited_by');
            $table->string('nama_workshop');
            $table->text('alamat');
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
            $table->timestamp('waktu_update');
            // $table->timestamps();
            $table->engine = "InnoDB";
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
