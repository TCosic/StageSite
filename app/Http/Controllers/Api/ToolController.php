<?php

namespace App\Http\Controllers\Api;

use App\Tool;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class ToolController extends Controller
{
    private function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'description'=> 'required',
            'status_id' => 'required',
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            Tool::create($input);
        }
        return redirect(route('login.admin.tool'));
    }

    public function update(Request $request, $tool)
    {
        $input = $request->all();

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            $tool->update($input);
        }
        return redirect(route('login.admin.tool'));
    }

    public function destroy($tool){
        if($tool->delete()) {
            return response(1, 200);
        }
        return response(0, 200);
    }
}
