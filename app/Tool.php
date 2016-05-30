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
        return $this->belongsToMany('App\Company', 'internshiptools', 'tool_id', 'company_id');
    }

    public function internship_user() {
        return $this->belongsToMany('App\Internship_user', 'internshiptools', 'tool_id', 'internship_user_id');
    }
}
