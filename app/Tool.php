<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public $fillable = [
        'name',
        'description',
        'status_id'
    ];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function company() {
        return $this->hasMany('App\Company', 'internshiptools', 'company_id');
    }

    public function internship_user() {
        return $this->hasMany('App\Internship_user', 'internshiptools', 'internship_user_id');
    }
}
