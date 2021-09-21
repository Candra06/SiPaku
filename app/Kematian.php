<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table ='data_kematian';
    protected $fillable = ['id_warga','tanggal', 'hari', 'penyebab','tempat'];
}
