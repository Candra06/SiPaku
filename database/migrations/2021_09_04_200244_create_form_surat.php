<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_surat')->index();
            $table->foreign('id_surat')->references('id')->on('surat')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedInteger('id_form')->index();
            $table->foreign('id_form')->references('id')->on('forms')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('form_surat');
    }
}
