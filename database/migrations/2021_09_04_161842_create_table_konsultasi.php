<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKonsultasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasi_room', function (Blueprint $table) {
            $table->increments('id', 4);
            $table->enum('kategori', ['Balai Penyuluhan Umum', 'KIA']);
            $table->bigInteger('warga')->unsigned();
            $table->bigInteger('nakes')->unsigned();
            $table->timestamps();
            $table->foreign('warga')->references('id')->on('users');
            $table->foreign('nakes')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_konsultasi');
    }
}
