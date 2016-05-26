<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $fillable = [
        'location_id',
        'cohort_id'
    ];

    public function internship(){
        return $this->hasMany('App\Internship');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function cohort()
    {
        return $this->belongsTo('App\Cohort');
    }
}
