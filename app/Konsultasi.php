<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi_room';
    protected $fillable = ['kategori', 'warga', 'nakes'];
}
