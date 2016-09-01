<?php

namespace App\Http\Controllers\Web;

use App\Internship_user;
use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userId = $user->id;
        $internship_user = Internship_user::where('user_id', '=', $userId)->first();

        $reviews = Review::where('internship_user_id', '=', $internship_user->id)->get();

        return view('pages.accounts.index', compact("user", "reviews"));
    }

}
