<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $fillable = [
        'name'
    ];

    public function location(){
        return $this->hasMany('App\Location');
    }
}
