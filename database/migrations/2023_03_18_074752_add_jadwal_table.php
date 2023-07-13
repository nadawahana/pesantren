<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelombang1', function (Blueprint $table) {
            $table->id();
            $table->date('batas_waktu_pendaftaran');
            $table->date('ujian_lisan');
            $table->date('ujian_tulisan');
            $table->date('pengumuman_hasil');
            $table->date('daftar_ulang');
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
        Schema::dropIfExists('gelombang1');
    }
}
