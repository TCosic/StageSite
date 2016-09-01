<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Internship;
use App\Company;
use App\Review;
use App\Internship_user;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $requestData = $request->all();
        $companyName = $requestData['company_name'];

        $internships = Internship::whereHas('contact', function ($q) use ($companyName) {
            $q->whereHas('company', function ($q2) use ($companyName) {
                $q2->where('name', 'like', "%$companyName%");
            });
        })
            ->where('education_id', '=', $requestData['education'])
            ->get();

        return response($internships, 200);
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

    public function review(Request $request)
    {
        $input = $request->all();



//        return redirect(route('stage.show', $input->internship_id));
        $uid = Auth::user()->id;


        $input['internship_user_id'] = Internship_user::where(['internship_id' => $input["internship_id"], 'user_id' => $uid])->first()->id;

        //dd($input);

        Review::create($input);
        //return response($request->all(), 200);
        return redirect(route('stage.show', $input['internship_user_id']));
//        return response($input, 200);
        //return response($uid, 200);
    }
}
