<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $fillable = [
        'name'
    ];

    public function review(){
        return $this->hasMany('App\Review');
    }

    public function tool(){
        return $this->hasMany('App\Tool');
    }

    public function internship(){
        return $this->hasMany('App\Internship');
    }
}
