<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $fillable = [
        'streetname',
        'housenumber',
        'postal_code',
        'city',
        'school_id'
    ];

    public function education(){
        return $this->hasMany('App\Education');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
