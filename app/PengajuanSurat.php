<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = 'pengajuan_surat';
    protected $fillable = ['id_surat', 'id_user', 'keperluan', 'status'];
}
