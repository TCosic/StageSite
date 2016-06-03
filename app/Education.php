<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * Laravel was looking for "education" wich is the wrong table name when seeding. It should be "educations"
     * This is fucking insane, why does this fix it?
     */
    protected $table = "educations";

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

    public function getCreboNameAttribute()
    {
        return $this->cohort->crebo->name;
    }
}
