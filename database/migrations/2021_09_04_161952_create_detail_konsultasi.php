<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_konsultasi', function (Blueprint $table) {
            $table->increments('id', 4);
            $table->bigInteger('sender')->unsigned();
            $table->bigInteger('receiver')->unsigned();
            $table->integer('id_konsultasi');
            $table->text('message');
            $table->timestamps();
            $table->foreign('sender')->references('id')->on('users');
            $table->foreign('receiver')->references('id')->on('users');
            // $table->foreign('id_konsultasi')->references('id')->on('konsultasi_room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_konsultasi');
    }
}
