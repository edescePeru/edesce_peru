<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscription extends Model
{
    protected $fillable = [
        'modality', 'user_id', 'code'
    ];

    public function details()
    {
        return $this->hasMany('App\InscriptionDetail');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    use SoftDeletes;
}
