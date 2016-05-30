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
}
