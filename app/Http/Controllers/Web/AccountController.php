<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index(){
        return view('pages.accounts.index');
    }

}
