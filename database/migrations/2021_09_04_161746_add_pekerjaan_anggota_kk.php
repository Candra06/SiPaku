<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPekerjaanAnggotaKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_anggota_kk', function (Blueprint $table) {
            //

            $table->enum('pekerjaan', ['PETANI/PEKEBUN', 'BELUM/TIDAK BEKERJA', 'BURUH TANI/PERKEBUNAN','MENGURUS RUMAH TANGGA', 'PELAJAR/MAHASISWA', 'WIRASWASTA', 'BURUH HARIAN LEPAS', 'SOPIR', 'KARYAWAN HONORER','BURUH NELAYAN/PERIKANAN', 'PENSIUNAN', 'PERDAGANGAN', 'PERANGKAT DESA', 'PEGAWAI NEGERI SIPIL']);
            $table->enum('penghasilan', ['<500.000','500.000-1.000.000', '1.000.0000-2.000.000', '2.000.000-3.000.000', '3.000.000-4.000.000', '4.000.000-5.000.000', '>5.000.000']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_anggota_kk', function (Blueprint $table) {
            //
        });
    }
}
