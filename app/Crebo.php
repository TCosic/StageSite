<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crebo extends Model
{
    public $fillable = [
        'name',
        'number'
    ];

    public function education(){
        return $this->hasMany('App\Education');
    }
}
