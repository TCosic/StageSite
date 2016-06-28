<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use Validator;

class CompanyController extends Controller
{
    private function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'streetname'=> 'required',
            'housenumber' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'tel' => 'required',
            'website' => 'required'
        ]);
    }

    public function search(Request $request)
    {
        $requestData = $request->all();
        $companyName = $requestData['company_name'];
        /**
         * todo: make company search?
         */

//        $internships = Internship::whereHas('contact', function ($q) use ($companyName) {
//            $q->whereHas('company', function ($q2) use ($companyName) {
//                $q2->where('name', 'like', "%$companyName%");
//            });
//        })
//            ->where('education_id', '=', $requestData['education'])
//            ->get();

        return response(/*$internships*/ 'de search', 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            Company::create($input);
        }
        return redirect(route('bedrijf.index'));
    }

    public function update(Request $request, $company)
    {
        $input = $request->all();

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            $company->update($input);
        }
        return redirect(route('bedrijf.index'));
    }

    public function destroy($company){
        if($company->delete()) {
            return response(1, 200);
        }
        return response(0, 200);
    }
}
