<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InscriptionDetail extends Model
{
    protected $fillable = [
        'inscription_id', 'subject_id', 'score', 'file_pdf', 'file_pdf2'
    ];

    public function inscription()
    {
        return $this->belongsTo('App\Inscription');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    use SoftDeletes;
}
