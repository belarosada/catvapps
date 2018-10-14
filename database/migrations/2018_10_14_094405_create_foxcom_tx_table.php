<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoxcomTxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foxcom_tx', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_channel');
            $table->string('level_foxcom');
            $table->string('cnr_foxcom');
            $table->string('tanggal_foxcom');
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
        Schema::dropIfExists('foxcom_tx');
    }
}
