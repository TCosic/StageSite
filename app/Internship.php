<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public $fillable = [
        'start_date',
        'end_date',
        'contact_id',
        'status_id',
        'education_id'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'internship_users', 'internship_id', 'user_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function education()
    {
        return $this->belongsTo('App\Education');
    }

    public function getCompanyNameAttribute()
    {
        return $this->contact->company->name;
    }
}
