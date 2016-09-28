<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Tool;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        return view('pages.admin.index');
    }

    public function user(){
        $users = User::all();
        return view('pages.admin.uadmin', compact('users'));
    }

    public function tool(){
        $tools = Tool::all();
        return view('pages.admin.tadmin', compact('tools'));
    }

    public function company(){
        $companies = Company::all();

        return view('pages.admin.cadmin', compact('companies'));
    }
}
