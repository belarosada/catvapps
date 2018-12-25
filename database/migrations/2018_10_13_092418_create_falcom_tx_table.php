<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFalcomTxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falcom_tx', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_channel');
            $table->string('level_falcom');
            $table->string('cnr_falcom');
            $table->string('tanggal_falcom');
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
        Schema::dropIfExists('falcom_tx');
    }
}
