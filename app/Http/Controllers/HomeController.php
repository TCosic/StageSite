<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getIndex()
    {
        return View::make('home.index');
    }

    public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::intended('/user');
        }

        return Redirect::back()
            ->withInput()
            ->withErrors('That username/password combo does not exist.');
    }

    public function getLogin()
    {
        return Redirect::to('/');
    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}

