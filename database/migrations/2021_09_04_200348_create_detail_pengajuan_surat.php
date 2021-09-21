<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengajuanSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengajuan_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pengajuan')->index();
            $table->unsignedInteger('id_form_letter')->index();
            $table->text('value_form');
            $table->timestamps();
            $table->foreign('id_pengajuan')->references('id')->on('pengajuan_surat');
            $table->foreign('id_form_letter')->references('id')->on('form_surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pengajuan_surat');
    }
}
