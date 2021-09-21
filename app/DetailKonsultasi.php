<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailKonsultasi extends Model
{
    protected $table = 'detail_konsultasi';
    protected $fillable = ['sender', 'receiver', 'id_konsultasi', 'message', 'status'];
}
