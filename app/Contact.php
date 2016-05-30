<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = [
        'name',
        'middle_name',
        'last_name',
        'email',
        'tel',
        'mobile',
        'company_id'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function internship(){
        return $this->hasMany('App\Internship');
    }
}
