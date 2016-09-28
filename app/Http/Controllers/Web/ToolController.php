<?php

namespace App\Http\Controllers\Web;

use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ToolController extends Controller
{
    public function create()
    {
        $statusses = Status::whereIn('name', ['Active', 'Disabled'])->pluck('name', 'id');

        return view('pages.tools.create', compact('statusses'));
    }

    public function edit($tool)
    {
        $statusses = Status::whereIn('name', ['Active', 'Disabled'])->pluck('name', 'id');

        return view('pages.tools.edit', compact('tool', 'statusses'));
    }
}
