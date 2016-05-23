<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = [
        'name',
        'middle_name',
        'last_name',
        'email',
        'tel',
        'mobile',
        'company_id'
    ];
}
