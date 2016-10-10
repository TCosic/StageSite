<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'email',
        'password',
        'role_id',
        'contact_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function internship()
    {
        return $this->belongsToMany('App\Internship', 'internship_users', 'user_id', 'internship_id');
    }
}
