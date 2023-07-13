<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataOrtu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->string('ket_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('ket_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat');
            $table->foreignId('user_id')->unique();
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
        Schema::dropIfExists('data_ortu');
    }
}
