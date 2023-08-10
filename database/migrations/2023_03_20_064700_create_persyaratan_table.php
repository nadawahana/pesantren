<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('smt1-kls5')->default(0)->nullable();
            $table->string('smt2-kls5')->default(0)->nullable();
            $table->string('smt1-kls6')->default(0)->nullable();
            $table->string('1kls5_agama')->default(0)->nullable();
            $table->string('1kls5_pkn')->default(0)->nullable();
            $table->string('1kls5_bIndo')->default(0)->nullable();
            $table->string('1kls5_mtk')->default(0)->nullable();
            $table->string('1kls5_ipa')->default(0)->nullable();
            $table->string('1kls5_ips')->default(0)->nullable();
            $table->string('1kls5_senbud')->default(0)->nullable();
            $table->string('1kls5_penjas')->default(0)->nullable();
            $table->string('1kls5_rata2')->default(0)->nullable();
            $table->string('2kls5_agama')->default(0)->nullable();
            $table->string('2kls5_pkn')->default(0)->nullable();
            $table->string('2kls5_bIndo')->default(0)->nullable();
            $table->string('2kls5_mtk')->default(0)->nullable();
            $table->string('2kls5_ipa')->default(0)->nullable();
            $table->string('2kls5_ips')->default(0)->nullable();
            $table->string('2kls5_senbud')->default(0)->nullable();
            $table->string('2kls5_penjas')->default(0)->nullable();
            $table->string('2kls5_rata2')->default(0)->nullable();
            $table->string('1kls6_agama')->default(0)->nullable();
            $table->string('1kls6_pkn')->default(0)->nullable();
            $table->string('1kls6_bIndo')->default(0)->nullable();
            $table->string('1kls6_mtk')->default(0)->nullable();
            $table->string('1kls6_ipa')->default(0)->nullable();
            $table->string('1kls6_ips')->default(0)->nullable();
            $table->string('1kls6_senbud')->default(0)->nullable();
            $table->string('1kls6_penjas')->default(0)->nullable();
            $table->string('1kls6_rata2')->default(0)->nullable();
            $table->string('KK')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('akta_kelahiran')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('KIP')->nullable();
            $table->string('penghargaan')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persyaratan');
    }
}
