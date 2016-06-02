<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $fillable = [
        'name',
        'streetname',
        'housenumber',
        'postal_code',
        'city',
        'tel'
    ];

    public function contact(){
        return $this->hasMany('App\Contact');
    }

    public function tools() {
        return $this->belongsToMany('App\Tool', 'internshiptools', 'company_id', 'tool_id');
    }

    public function internship_user() {
        return $this->belongsToMany('App\Internship_user', 'internshiptools', 'company_id', 'internship_user_id');
    }

    public function fullAddress(){
        return $this->streetname.' '.$this->housenumber.' '.$this->postal_code.' '.$this->city;
    }

}
