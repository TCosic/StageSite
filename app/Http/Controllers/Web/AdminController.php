<?php

namespace App\Http\Controllers\Web;

use App\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){

        return view('pages.admin.index');
    }

    public function user(){
        return view('pages.admin.uadmin');
    }

    public function tool(){
        return view('pages.admin.tadmin');
    }

    public function company(){
        $companies = Company::all();
        //dd($companies);
        return view('pages.admin.cadmin', compact('companies'));
    }
}
