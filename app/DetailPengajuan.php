<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPengajuan extends Model
{
    protected $table = 'detail_pengajuan_surat';
    protected $fillable = ['id_pengajuan', 'id_form_letter', 'value_form'];
}
