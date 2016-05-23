<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $fillable = [
        'internship_user_id',
        'status_id',
        'review',
        'rating'
    ];
}
