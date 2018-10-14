<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouplerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_channel');
            $table->string('id_box');
            $table->string('id_jenis_material');
            $table->string('level_tr');
            $table->string('cnr_tr');
            $table->string('inout');
            $table->string('tanggal_tr');
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
        Schema::dropIfExists('coupler');
    }
}
