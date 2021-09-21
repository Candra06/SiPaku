<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_surat')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->text('keperluan');
            $table->enum('status', ['Pending', 'Confirm', 'Done']);
            $table->timestamps();
            $table->foreign('id_surat')->references('id')->on('surat');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_surat');
    }
}
