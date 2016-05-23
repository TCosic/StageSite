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
}
