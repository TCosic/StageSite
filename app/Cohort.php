<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    public $fillable = [
        'name',
        'begin_year',
        'end_year',
        'crebo_id'
    ];
}
