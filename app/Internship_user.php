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
        return $this->hasMany('App\Company', 'internshiptools', 'company_id');
    }

    public function tools() {
        return $this->hasMany('App\Tool', 'internshiptools', 'tools_id');
    }
}
