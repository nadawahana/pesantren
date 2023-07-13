<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableGelomban2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelombang2', function (Blueprint $table) {
            $table->id();
            $table->string('batas_waktu_pendaftaran');
            $table->string('ujian_lisan');
            $table->string('ujian_tulisan');
            $table->string('pengumuman_hasil');
            $table->string('daftar_ulang');
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
        Schema::dropIfExists('gelombang2');
    }
}
