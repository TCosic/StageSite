<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Internship;
use App\Education;

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
        $stages = Internship::all();

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

        return view('pages.internships.index', compact(['stages', 'educations', 'radius']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stage = Internship::findOrFail($id);
        return view('pages.internships.show', compact(['stage']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
