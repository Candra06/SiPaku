<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKK extends Model
{
    protected $table = 'data_kk';
    protected $fillable = ['no_kk', 'jenis_usaha', 'kepemilikan_tanah', 'aset', 'ternak', 'kondisi_rumah', 'alamat', 'rt', 'rw', 'total_pendapatan'];

    public function anggota()
    {
        return $this->hasMany(AnggotaKeluarga::class);
    }
}
