<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSurat extends Model
{
    protected $table = 'form_surat';
    protected $fillable = ['id_surat', 'id_form'];

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}
