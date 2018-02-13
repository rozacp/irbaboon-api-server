<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->string('uuid');
            $table->string('socket_id');
            $table->integer('room_temp');
            $table->integer('ac_model_id')->unsigned();
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('ac_model_id')->references('id')->on('ac_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
