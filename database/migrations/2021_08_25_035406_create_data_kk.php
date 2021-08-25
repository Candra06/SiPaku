<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kk', function (Blueprint $table) {
            $table->increments('id', 4);
            $table->string('no_kk')->unique();
            $table->string('jenis_usaha');
            $table->string('kepemilikan_tanah');
            $table->string('aset');
            $table->enum('ternak',['Sapi', 'Kambing', 'Ayam']);
            $table->enum('kondisi_rumah',['Layak', 'Tidak Layak']);
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->integer('total_pendapatan');
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
        Schema::dropIfExists('data_kk');
    }
}
