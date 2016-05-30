<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship_user extends Model
{
    public $fillable = [
        'internship_id',
        'company_id'
    ];
}
