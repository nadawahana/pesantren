<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableBuktiTfUlang2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_ulang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('user_id');
            $table->string('bukti_tf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tf_ulang', function (Blueprint $table) {
            //
        });
    }
}
