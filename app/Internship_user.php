<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship_user extends Model
{
    public $fillable = [
        'internship_id',
        'company_id'
    ];

    public function review(){
        return $this->hasOne('App\Review');
    }

    public function company() {
        return $this->belongsToMany('App\Company', 'internshiptools', 'internship_user_id', 'company_id');
    }

    public function tools() {
        return $this->belongsToMany('App\Tool', 'internshiptools', 'internship_user_id', 'tools_id');
    }
}
