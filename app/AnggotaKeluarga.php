<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    protected $table ='data_anggota_kk';
    protected $fillable = ['no_kk', 'nik', 'nama_lengkap', 'status_hubungan', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'gol_dar', 'agama', 'pend_akhir', 'status_kawin', 'no_paspor', 'tgl_akhir_paspor', 'status'];

    public function kepala()
    {
        return $this->belongsTo(DataKK::class);
    }
}
