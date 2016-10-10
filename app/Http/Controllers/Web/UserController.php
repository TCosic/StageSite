<?php

namespace App\Http\Controllers\Web;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create()
    {
        $role = Role::all()->pluck('name', 'id');

        return view('pages.users.create', compact('role'));
    }

    public function edit($user)
    {
        $role = Role::all()->pluck('name', 'id');

        return view('pages.users.edit', compact('user', 'role'));
    }
}
