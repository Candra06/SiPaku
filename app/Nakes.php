<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nakes extends Model
{
    protected $table = 'nakes';
    protected $fillable = ['id_user', 'bidang', 'status'];
}
