<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internshiptool extends Model
{
    public $fillable = [
        'tools_id',
        'internship_user_id',
        'company_id'
    ];
}
