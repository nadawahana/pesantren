<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_nilai', function (Blueprint $table) {
            $table->string('nama');
            $table->string('baca_alquran');
            $table->string('sholat');
            $table->string('tahfidz');
            $table->string('ujian_tulisan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_nilai', function (Blueprint $table) {
            //
        });
    }
}
