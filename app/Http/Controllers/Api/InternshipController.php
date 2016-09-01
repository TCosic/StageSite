<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Internship;
use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class InternshipController extends Controller
{
    private function validator(array $data)
    {
        return Validator::make($data, [
            'start_date' => 'required|date',
            'end_date'=> 'required|date',
            'contact_id' => 'required',
            'status_id' => 'required',
            'education_id' => 'required'
        ]);
    }

    public function search(Request $request)
    {
        /**
         * ToDo: handle serialized data from ajax post.
         */
        $requestData = $request->all();
        //$requestData = json_decode($requestData);
        //$companyName = $requestData['company_name'];


        return response($requestData['input'], 200);

//        $internships = Internship::whereHas('contact', function ($q) use ($companyName) {
//            $q->whereHas('company', function ($q2) use ($companyName) {
//                $q2->where('name', 'like', "%$companyName%");
//            });
//        })
//            ->where('education_id', '=', $requestData['education'])
//            ->get();
//
//        //return response(['data': true], 200);
//
//        return response($internships, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['contact_id'] = 1;

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            Internship::create($input);
        }
        return redirect(route('stage.index'));
    }

    public function update(Request $request, $internship)
    {

        $input = $request->all();
        $input['contact_id'] = 1;

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            $internship->update($input);
        }
        return redirect(route('stage.index'));
    }

    public function destroy($internship){
        if($internship->delete()) {
            return response(1, 200);
        }
        return response(0, 200);
    }
}
