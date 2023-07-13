<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableNmrUjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor_ujian', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->string('nama_lengkap');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenkel');
            $table->string('asal_sekolah');
            $table->string('jalur_masuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomor_ujian');
    }
}
