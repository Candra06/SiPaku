<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    protected $table= 'ternak';
    protected $fillable = ['nama'];
}
