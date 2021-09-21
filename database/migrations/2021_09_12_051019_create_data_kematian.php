<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKematian extends Migration
{
    /**
     * Run the migrations.
     *nik
     * @return void
     */
    public function up()
    {
        Schema::create('data_kematian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_warga')->unsigned();
            $table->date('tanggal');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu','Kamis', 'Jum`at', 'Sabtu', 'Minggu']);
            $table->string('penyebab');
            $table->string('tempat');
            $table->timestamps();
            $table->foreign('id_warga')->on('data_anggota_kk')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kematian');
    }
}
