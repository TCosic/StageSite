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
}
