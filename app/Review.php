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

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function internship_user()
    {
        return $this->belongsTo('App\Internship_user');
    }
}
