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
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('baca_alquran');
            $table->string('sholat');
            $table->string('tahfidz');
            $table->string('ujian_tulisan');
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
        Schema::dropIfExists('data_nilai');
    }
}
