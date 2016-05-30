<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $fillable = [
        'location_id',
        'cohort_id'
    ];
}
