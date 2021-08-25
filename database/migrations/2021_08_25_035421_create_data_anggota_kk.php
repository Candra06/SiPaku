<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotaKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggota_kk', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('no_kk', 20)->unsigned();
            $table->string('nik', 20)->unique();
            $table->string('nama_lengkap' );
            $table->enum('status_hubungan', ['KEPALA KELUARGA', 'ISTRI', 'ANAK', 'CUCU', 'ORANG TUA']);
            $table->enum('jenis_kelamin', ['LAKI-LAKI', 'PEREMPUAN']);
            $table->string('tempat_lahir' );
            $table->string('tgl_lahir');
            $table->string('gol_dar');
            $table->enum('agama', ['ISLAM', 'HINDU', 'BUDHA', 'KRISTEN', 'KATOLIK', 'PROTESTAN', 'KONGHUCU']);
            $table->enum('pend_akhir', ['SLTP/Sederajat', 'Tamat SD/Sederajat', 'Tidak/Belum Sekolah', 'Diploma IV/Strata I', 'Belum Tamat SD/Sederajat', 'SLTP/Sederajat', 'KONGHUCU']);
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin', 'Cerai Mati', 'Cerai Hidup']);
            $table->string('no_paspor');
            $table->date('tgl_akhir_paspor');
            $table->enum('status', ['Hidup', 'Mati']);
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
        Schema::dropIfExists('data_anggota_kk');
    }
}
