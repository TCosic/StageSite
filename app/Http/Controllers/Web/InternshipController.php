<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Internship;
use App\Education;
use App\Status;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internships = Internship::all();

        $educations = Education::all()->pluck('crebo_name', 'id');

        $radius = [
            1 => '1 km',
            2 => '2 km',
            5 => '5 km',
            10 => '10 km',
            15 => '15 km',
            20 => '20 km',
            30 => '30 km'
        ];

        return view('pages.internships.index', compact('internships', 'educations', 'radius'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($internship)
    {
        return view('pages.internships.show', compact('internship'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $educations = Education::all()->pluck('crebo_name', 'id');
        $statusses = Status::whereIn('name', ['Public', 'Private'])->pluck('name', 'id');

        return view('pages.internships.create', compact('educations', 'statusses'));
    }

    public function edit($internship)
    {
        $educations = Education::all()->pluck('crebo_name', 'id');
        $statusses = Status::whereIn('name', ['Public', 'Private'])->pluck('name', 'id');

        return view('pages.internships.edit', compact('internship', 'educations', 'statusses'));
    }
}
