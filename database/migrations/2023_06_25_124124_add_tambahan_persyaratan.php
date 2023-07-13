<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahanPersyaratan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persyaratan', function (Blueprint $table) {
            $table->string('1kls5_agama');
            $table->string('1kls5_pkn');
            $table->string('1kls5_bIndo');
            $table->string('1kls5_mtk');
            $table->string('1kls5_ipa');
            $table->string('1kls5_ips');
            $table->string('1kls5_senbud');
            $table->string('1kls5_penjas');
            $table->string('1kls5_rata2');
            $table->string('2kls5_agama');
            $table->string('2kls5_pkn');
            $table->string('2kls5_bIndo');
            $table->string('2kls5_mtk');
            $table->string('2kls5_ipa');
            $table->string('2kls5_ips');
            $table->string('2kls5_senbud');
            $table->string('2kls5_penjas');
            $table->string('2kls5_rata2');
            $table->string('1kls6_agama');
            $table->string('1kls6_pkn');
            $table->string('1kls6_bIndo');
            $table->string('1kls6_mtk');
            $table->string('1kls6_ipa');
            $table->string('1kls6_ips');
            $table->string('1kls6_senbud');
            $table->string('1kls6_penjas');
            $table->string('1kls6_rata2');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persyaratan', function (Blueprint $table) {
            //
        });
    }
}
