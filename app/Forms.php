<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $table = 'forms';
    protected $fillable = ['name', 'label', 'type'];
}
