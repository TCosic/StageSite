<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $fillable = [
        'streetname',
        'housenumber',
        'postal_code',
        'city',
        'school_id'
    ];
}
