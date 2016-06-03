<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Internship;
use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function search(Request $request)
    {
        $requestData = $request->all();
        $companyName = $requestData['company_name'];
        $stage = Internship::whereHas('contact', function ($q) use ($companyName) {
            $q->whereHas('company', function ($q2) use ($companyName) {
                $q2->where('name', 'like', "%$companyName%");
            });
        })
            ->where('education_id', '=', $requestData['education'])
            ->get();

        dd($stage);

        return "hoi dit is de search. Doei!";
    }
}
