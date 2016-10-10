<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    private function validator(array $data, $user = "")
    {
        $rules = [
            "email" => 'email|required|unique:users,email,',
            "password",
            "role_id" => 'exists:roles,id|required',
            "name" => 'required',
            "middle_name",
            "last_name" => 'required',
            "tel" => 'numeric',
            "mobile" => 'numeric',
        ];

        if(!empty($user)){
            $rules['email'] = 'email|required|unique:users,email,'.$user->id;
        }
        return Validator::make($data, $rules);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            $contact = Contact::create($input);
            $input['contact_id'] = $contact->id;
            User::create($input);
        }
        return redirect(route('login.admin.user'));
    }

    public function update(Request $request, $user)
    {
        $input = $request->all();

        $validate = $this->validator($input, $user);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            $user->contact->update($input);
            $user->update($input);
        }
        return redirect(route('login.admin.user'));
    }

    public function destroy($user){
        if($user->delete() && $user->contact->delete()) {
            return response(1, 200);
        }
        return response(0, 200);
    }
}
