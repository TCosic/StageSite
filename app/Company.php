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
        return $this->hasMany('App\Tool', 'internshiptools', 'tools_id');
    }

    public function internship_user() {
        return $this->hasMany('App\Internship_user', 'internshiptools', 'internship_user_id');
    }

}
