<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = ['surat', 'deskripsi'];

    public function format()
    {
        return $this->hasMany(FormSurat::class);
    }
}
