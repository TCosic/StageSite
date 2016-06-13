<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UAdminController extends Controller
{
    public function index(){
        return view('admin/user_admin/uadmin');
    }
}
