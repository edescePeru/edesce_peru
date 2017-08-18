<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $fillable = [
        'name', 'description', 'level'
    ];

    public function inscription_details()
    {
        return $this->hasMany('App\InscriptionDetail');
    }

    use SoftDeletes;
}
