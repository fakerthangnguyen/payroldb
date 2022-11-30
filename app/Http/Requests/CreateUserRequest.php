<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'User_Name'  => 'required',
            'Password'   => 'required',
            'Email'      => 'required|unique:users,Email',
            'Active'     =>  'required|boolean',
        ];
    }
}
